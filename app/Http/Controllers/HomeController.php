<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $danhsachdichvu    = $danhsachdichvu_footer = Post::where('status' , '=' , 1)
                                ->where('service', '=' , 1)
                                ->orderby('id','asc')->limit(5)->get();
        $danhmucbaiviet    = Category::where('status','=',1)->orderby('id','asc')->get();
        $sliders = DB::table('sliders')->where('location',2)->where('status', 1)->orderBy('position', 'ASC')->get();
        $posts   = Post::where('status', 1)->orderBy('id', 'DESC')->limit(5)->get();
        $list_post_sidebar = Post::where('status', 1)->orderBy('id', 'DESC')->limit(3)->get();
        return view('frontend.index',
            [
                'danhmucbaiviet'        => $danhmucbaiviet,
                'sliders'               => $sliders,
                'danhsachdichvu'        => $danhsachdichvu,
                'posts'                 => $posts,
                'list_post_sidebar'     => $list_post_sidebar,
                'danhsachdichvu_footer' => $danhsachdichvu_footer,
            ]);
    }

    public function list_post(Request $request){


        $searchValues = '';
        if($request->query('tim-kiem') !=""){
            $searchValues = preg_split('/\s+/', $request->query('tim-kiem'), -1, PREG_SPLIT_NO_EMPTY);
        }
        $danhmucbaiviet = Category::where('status','=',1)->orderby('id','asc')->get();
        $list_post_sidebar = Post::where('status', 1)->orderBy('id', 'DESC')->limit(3)->get();
        $posts = Post::where('status', 1)->orderBy('id', 'DESC')
        ->where(function ($q) use ($searchValues) {
            if($searchValues!="")
              foreach ($searchValues as $value) {
                $q->orWhere('title', 'like', '%'.$value.'%');
              }
        })
        ->paginate(5)->withQueryString();
        $cat_parents = Category::where('status', 1)->where('parent_id', 0)->where('taxonomy', 1)->get();

        $danhsachdichvu_footer = Post::where('status' , '=' , 1)
                                ->where('service', '=' , 1)
                                ->orderby('id','asc')->limit(5)->get();

        return \view('frontend.list-post',
        [
            'danhmucbaiviet'            => $danhmucbaiviet,
            'posts'                     => $posts,
            'cat_parents'               => $cat_parents,
            'list_post_sidebar'         => $list_post_sidebar,
            'danhsachdichvu_footer'     => $danhsachdichvu_footer,
        ]);
    }

    public function list_post_cat(Request $request, $slug){
        $cat = Category::where('slug', $slug)->first();
        if (empty($cat)) {
            return abort(404);
        }
        $list_id = $cat->get_post_by_cat();
        $searchValues = '';
        if($request->query('tim-kiem') !=""){
            $searchValues = preg_split('/\s+/', $request->query('tim-kiem'), -1, PREG_SPLIT_NO_EMPTY);
        }
        $danhmucbaiviet = Category::where('status','=',1)->orderby('id','asc')->get();
        $list_post_sidebar = Post::where('status', 1)->orderBy('id', 'DESC')->limit(3)->get();
        $posts = Post::where('status', 1)->orderBy('id', 'DESC')->whereIn('id', $list_id)
        ->where(function ($q) use ($searchValues) {
            if($searchValues!="")
              foreach ($searchValues as $value) {
                $q->orWhere('title', 'like', '%'.$value.'%');
              }
        })
        ->paginate(5)->withQueryString();
        $cat_parents = Category::where('status', 1)->where('parent_id', 0)->where('taxonomy', 1)->get();
        $category_active = $cat;
        $danhsachdichvu_footer = Post::where('status' , '=' , 1)
                                ->where('service', '=' , 1)
                                ->orderby('id','asc')->limit(5)->get();
        return \view('frontend.list-post',
        [
            'danhmucbaiviet'        => $danhmucbaiviet,
            'posts'                 => $posts,
            'cat_parents'           => $cat_parents,
            'list_post_sidebar'     => $list_post_sidebar,
            'category_active'       => $category_active,
            'danhsachdichvu_footer' => $danhsachdichvu_footer,
        ]);
    }

    public function detail_post(Request $request, $slug){
        $danhsachdichvu_footer = Post::where('status' , '=' , 1)
                                ->where('service', '=' , 1)
                                ->orderby('id','asc')->limit(5)->get();
        $post = Post::where('slug', $slug)->first();
        if(empty($post)){
           return \abort(404);
        }
        $danhmucbaiviet = Category::where('status','=',1)->orderby('id','asc')->get();
        $list_post_sidebar = Post::where('status', 1)->orderBy('id', 'DESC')->limit(3)->get();
        $cat_parents = Category::where('status', 1)->where('parent_id', 0)->where('taxonomy', 1)->get();
        return \view('frontend.detail-post', [
            'danhmucbaiviet'        => $danhmucbaiviet,
            'post'                  => $post,
            'cat_parents'           => $cat_parents,
            'list_post_sidebar'     => $list_post_sidebar,
            'danhsachdichvu_footer' => $danhsachdichvu_footer,
        ]);
    }

    public function list_service(){
        $danhsachdichvu_footer = Post::where('status' , '=' , 1)
                                ->where('service', '=' , 1)
                                ->orderby('id','asc')->limit(5)->get();
        $danhsachdichvu = Post::where('status' , '=' , 1)
                                ->where('service', '=' , 1)
                                ->orderby('id','asc')->get();
        $list_post_sidebar = Post::where('status', 1)->orderBy('id', 'DESC')->limit(3)->get();
        $danhmucbaiviet    = Category::where('status','=',1)->orderby('id','asc')->get();
        return \view('frontend.list-service',
            [
                'danhmucbaiviet'        => $danhmucbaiviet,
                'danhsachdichvu'        => $danhsachdichvu,
                'list_post_sidebar'     => $list_post_sidebar,
                'danhsachdichvu_footer' => $danhsachdichvu_footer,
            ]);
    }
    public function contact(){
        $danhsachdichvu_footer = Post::where('status' , '=' , 1)
                                ->where('service', '=' , 1)
                                ->orderby('id','asc')->limit(5)->get();
        $danhmucbaiviet     = Category::where('status','=',1)->orderby('id','asc')->get();
        $list_post_sidebar  = Post::where('status', 1)->orderBy('id', 'DESC')->limit(3)->get();
        return \view('frontend.contact', [
            'danhmucbaiviet'        => $danhmucbaiviet,
            'list_post_sidebar'     => $list_post_sidebar,
            'danhsachdichvu_footer' => $danhsachdichvu_footer,
        ]);
    }
    public function contact_submit(Request $request){
       
        $request->validate(
            [
                'name'         => 'required|string|max:250',
                'email'        => 'nullable|email|max:250',
                'phone_number' => ['nullable', 'regex:/^(0[5|7|8|9])([0-9]{8})$/'],
                'note'         => 'nullable|string|max:1000',
            ],
            [
                'required'  => ':attribute không được để trống!',
                'email'     => ':attribute không đúng định dạng!',
                'max'       => ':attribute có độ dài tối đa :max ký tự!',
                'regex'     => ':attribute không chính xác!'
            ],
            [
                'name'         => 'Họ tên',
                'email'        => 'Email',
                'phone_number' => 'Số điện thoại',
                'note'         => 'Ghi chú'
            ],
        );

        $input = [
            'name'         => $request->input('name'),
            'phone_number' => $request->input('phone_number'),
            'email'        => $request->input('email'),
            'note'         => $request->input('note'),
        ];

        Customer::create($input);
        return \redirect()->route('contact')->with('success', 'Bạn đã gửi yêu cầu thành công!');
    }

    public function detail_service($slug){
        $danhsachdichvu_footer = Post::where('status' , '=' , 1)
                                ->where('service', '=' , 1)
                                ->orderby('id','asc')->limit(5)->get();
        $chitietdichvu  = Post::where('slug','=',$slug)->first();
        $danhsachdichvu = Post::where('status' , '=' , 1)
                                ->where('service', '=' , 1)
                                ->orderby('id','asc')->get();
        $danhmucbaiviet = Category::where('status','=',1)->orderby('id','asc')->get();
        $list_post_sidebar = Post::where('status', 1)->orderBy('id', 'DESC')->limit(3)->get();
        return \view('frontend.detail-service',
             [ 
                'danhmucbaiviet'          => $danhmucbaiviet,
                'danhsachdichvu'          => $danhsachdichvu,
                'chitietdichvu'           => $chitietdichvu,
                'danhsachdichvu_footer'   => $danhsachdichvu_footer,
                'list_post_sidebar'       => $list_post_sidebar,
            ]);
    }
}
