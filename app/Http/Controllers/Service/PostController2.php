<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CategoryRelationship;
use App\Models\Post;
use App\Models\Vote;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\Image;
use Yajra\DataTables\DataTables;
use App\Helpers\CommonHelper;
use function Psr\Log\error;

class PostController2 extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            \session(['module_active' => 'service',  'active' => 'Dịch vụ']);
            return $next($request);
        });
    }

    public function index(Request $request)
    {
        $this->authorize('view2',Post::class);
        $search = $request->search;
        $limit = 10;
        if (!is_null($request->limit))
            $limit = $request->limit;
        $posts = DB::table('posts')
            ->select('posts.*','users.name as user_name')
            ->leftJoin('users','posts.user_id','=','users.id')
            ->when($search, function ($query, $search){
                return $query->where('posts.title','like',"%$search%");
            })
            ->whereNull('posts.deleted_at')
            ->where('posts.service','=',1)
            ->paginate($limit);
            
        if($request->ajax()){
            return view('admin.service.data-table',['posts'=>$posts]);
        }
        return view('admin.service.index',[
            'title' => 'Danh sách dịch vụ',
            'posts' => $posts
        ]);
    }

    public function create()
    {
        $this->authorize('create2',Post::class);
        $arrCate = Category::where('taxonomy',Category::BAI_VIET)->pluck('name','id');
        return view('admin.service.create',[
            'arrCate' => $arrCate,
            'title' => 'Tạo dịch vụ'
        ]);
    }
    public function store(Request $request)
    {

        $this->authorize('create2',Post::class);
        $request->validate(
            [
                'title' => 'required|max:300|unique:posts',
                'thumb' =>'image|mimes:jpeg,jpg,png|mimetypes:image/jpeg,image/png,image/jpg|max:5048'
            ],
            [
                'title.required' => 'Tiêu đề không được để trống.',
                'title.max' => 'Tiêu đề có độ dài tối đa :max ký tự.',
                'title.unique' => 'Tiêu đề đã tồn tại trong hệ thống',
                'thumb.image' => 'Ảnh đại diện không đúng định dạng! (jpg, jpeg, png)',
            ]
        );

        $status = Post::ACTIVE;
        $nameFile = Post::IMAGE;
        if ($request->status == null)
            $status = Post::DISABLE;
        if ($request->thumb != null){
            $nameFile = CommonHelper::convertTitleToSlug($request->title,'-').'-'.time().'.'.$request->thumb->extension();
        }
        $input = [
            'title'     => $request->title,
            'slug'      => CommonHelper::convertTitleToSlug($request->title,'-'),
            'excerpt'   => $request->excerpt,
            'content'   => $request->content,
            'thumb'     => $nameFile,
            'status'    => $status,
            'service'   => 1,
            'icon'      => $request->icon,
            'user_id'   => Auth::id(),
        ];

        
        try {
            DB::beginTransaction();
            $post = Post::create($input);
            if ($request->categories != null){
                foreach ($request->categories as $category){
                    /** Lưu category_relationships */
                    $data = [
                        'cat_id'=> $category,
                        'post_id'=> $post->id
                    ];
                    CategoryRelationship::create($data);
                }
            }
            DB::commit();

            /** Lưu ảnh vào folder*/
            if ($request->thumb != null){

                $folder_large = 'upload/images/post/large/';
                $folder_medium = 'upload/images/post/medium/';
                $folder_thumb = 'upload/images/post/thumb/';
                $folder = 'upload/images/post/';

                $file = CommonHelper::uploadImage($request->thumb,$nameFile,$folder);
                CommonHelper::cropImage2($file,$nameFile,1600,900,$folder_large);
                CommonHelper::cropImage2($file,$nameFile,800,450,$folder_medium);
                CommonHelper::cropImage2($file,$nameFile,133,75,$folder_thumb);
            }

          
            return redirect()->route('post2.index')->with('success','Tạo dịch vụ mới thành công.');

        }catch (\Exception $exception){
            DB::rollBack();
//            throw new \Exception($exception->getMessage());
            return redirect()->route('post2.index')->with('error','Đã có lỗi xảy ra. Vui lòng thử lại!');
        }
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $this->authorize('update2',Post::class);
        $post = Post::find($id);
        if (is_null($post)){
            \abort(404);
        }else{
            $arrCate = Category::where('taxonomy',Category::BAI_VIET)->pluck('name','id');
            $arrCateRela = [];
            $arr = CategoryRelationship::where('post_id',$id)->get();
            foreach ($arr as $item){
                $arrCateRela[] = $item->cat_id;
            }
            return view('admin.service.edit',[
                'arrCate'     => $arrCate,
                'arrCateRela' =>$arrCateRela,
                'post'        => $post,
                'title'       => 'Sửa dịch vụ'
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $this->authorize('update2',Post::class);

        $request->validate(
            [
                'title' => 'required|max:300|unique:posts,title,'.$id,
                'thumb' =>'image|mimes:jpeg,jpg,png|mimetypes:image/jpeg,image/png,image/jpg|max:5048'
            ],
            [
                'title.required' => 'Tiêu đề không được để trống.',
                'title.max' => 'Tiêu đề có độ dài tối đa :max ký tự.',
                'title.unique' => 'Tiêu đề đã tồn tại trong hệ thống',
                'thumb.image' => 'Ảnh đại diện không đúng định dạng! (jpg, jpeg, png)',
            ]
        );

        $post = Post::find($id);
        if (!is_null($post)){
            $status = Post::ACTIVE;
            $nameFileOld = $post->thumb;
            if ($request->status == null)
                $status = Post::DISABLE;

            if ($request->thumb != null){
                $nameFile = CommonHelper::convertTitleToSlug($request->title,'-').'-'.time().'.'.$request->thumb->extension();
            }else
                $nameFile = $nameFileOld;
            /** Update bản ghi  */
            $input = [
                'title'     => $request->title,
                'slug'      => CommonHelper::convertTitleToSlug($request->title,'-'),
                'excerpt'   => $request->excerpt,
                'content'   => $request->content,
                'thumb'     => $nameFile,
                'status'    => $status,
                'service'   => 1,
                'icon'      => $request->icon,
                'user_id'   => Auth::id(),
            ];

            try {
                DB::beginTransaction();
                $post->update($input);
                CategoryRelationship::where('post_id',$post->id)->delete();
                if ($request->categories != null){
                    foreach ($request->categories as $category){
                        // Lưu category_relationships
                        $data = [
                            'cat_id'=> $category,
                            'post_id'=> $post->id
                        ];
                        CategoryRelationship::create($data);
                    }
                }
                DB::commit();

                if ($request->thumb != null){
                    /** Lưu ảnh mới vào folder */
                    $folder_large = 'upload/images/post/large/';
                    $folder_medium = 'upload/images/post/medium/';
                    $folder_thumb = 'upload/images/post/thumb/';
                    $folder = 'upload/images/post/';
                    $file =  CommonHelper::uploadImage($request->thumb,$nameFile,$folder);
                    CommonHelper::cropImage2($file,$nameFile,1600,900,$folder_large);
                    CommonHelper::cropImage2($file,$nameFile,800,450,$folder_medium);
                    CommonHelper::cropImage2($file,$nameFile,133,75,$folder_thumb);

                    /** Xoá ảnh cũ khi có upload ảnh mới */
                    if ($nameFileOld != Post::IMAGE){
                        CommonHelper::deleteImage($nameFileOld,$folder_large);
                        CommonHelper::deleteImage($nameFileOld,$folder_medium);
                        CommonHelper::deleteImage($nameFileOld,$folder_thumb);
                        CommonHelper::deleteImage($nameFileOld,$folder);
                    }
                }
                return redirect()->route('post2.index')->with('success','Sửa dịch vụ thành công.');
            }catch (\Exception $exception){
                DB::rollBack();
                return redirect()->route('post2.index')->with('error','Đã có lỗi xảy ra. Vui lòng thử lại!');
            }
        }
        return redirect()->route('post2.index')->with('error','Đã có lỗi xảy ra. Vui lòng thử lại!');
    }

    public function destroy(Request $request)
    {
        $this->authorize('delete2',Post::class);
        $post = Post::find($request->id);
        if (!is_null($post)){
            $post->delete();
            // Vote::where('post_id',$request->id)->delete();
            return \json_encode(array('success'=>true));
        }
        return \json_encode(array('success'=>false));
    }

    public function deleteImg(Request $request){
        $this->authorize('update2',Post::class);
        if (!empty($request->id)){
            $post = Post::find($request->id);
            if (!is_null($post)){
                if ($post->thumb != Post::IMAGE){
                    $folder_thumb = 'upload/images/post/thumb/';
                    $folder = 'upload/images/post/';
                    CommonHelper::deleteImage($post->thumb,$folder_thumb);
                    CommonHelper::deleteImage($post->thumb,$folder);
                    $post->update(['thumb'=>Post::IMAGE]);
                }
                return \json_encode(array('success'=>true));
            }
        }
        return \json_encode(array('success'=>false));
    }
}
