<?php

namespace App\Http\Controllers\Slider;

use App\Helpers\CommonHelper;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            \session(['module_active' => 'slider',  'active' => 'Slider']);
            return $next($request);
        });
    }

    public function index(Request $request)
    {
        $this->authorize('view',Slider::class);
        $search = $request->search;
        $location = $request->location;
        $limit = 10;
        if (!is_null($request->limit))
            $limit = $request->limit;
        $sliders = Slider::when($search, function ($query, $search){
            return $query->where('name','like',"%$search%");
        })->when($location, function ($query, $location){
            return $query->where('location','=',$location);
        })->paginate($limit)->withQueryString();

        if($request->ajax()){
            return view('admin.slider.data-table',['sliders'=>$sliders]);
        }
        return view('admin.slider.index',[
            'title' => 'Danh sách Slider',
            'sliders' => $sliders
        ]);
    }

    public function create()
    {
        $this->authorize('create',Slider::class);
        $getmaxstt  = Slider::max('position');
        $getmaxstt  = $getmaxstt + 1;
        return view('admin.slider.create',[
            'title'       => 'Tạo Slider',
            'arrLocation' => Slider::$arr_location,
            'getmaxstt'   => $getmaxstt,
        ]);
    }

    public function store(Request $request)
    {
        $this->authorize('create',Slider::class);
        $request->validate(
            [
                'position' => 'required|integer',
                'image'    =>'image|mimes:jpeg,jpg,png|mimetypes:image/jpeg,image/png,image/jpg|max:50048',
            ],
            [
                'position.integer' => 'Thứ tự hiển thị phải nhập số',
                'position.required'=> 'Chưa nhập thứ tự hiển thị',
                'image.image'      => 'Ảnh Slider không đúng định dạng! (jpg, jpeg, png)',
            ]
        );

        $status = Slider::ACTIVE;
        $nameFile = Slider::IMAGE;
        if ($request->status == null)
            $status = Slider::DISABLE;
        if ($request->link_target == null)
            $request->link_target = '#';
        if ($request->image != null){
            $nameFile = time().'.'.$request->image->extension();
        }
        $input = [
            'name'       => $request->name,
            'location'   => $request->location,
            'link_target'=> $request->link_target,
            'image'      => $nameFile,
            'user_id'    => Auth::id(),
            'position'   => $request->position,
            'status'     => $status,
            'subtitle'   => $request->subtitle,
            'description'=> $request->description,
        ];

        try {
            DB::beginTransaction();
            Slider::create($input);
            DB::commit();
            if ($request->image != null){
                $folder = 'upload/images/slider/';
                CommonHelper::uploadImage($request->image,$nameFile,$folder);
            }
            return redirect()->route('slider.index')->with('success','Tạo Slider mới thành công.');
        }catch (\Exception $exception){
            DB::rollBack();
            return redirect()->route('slider.index')->with('error','Đã có lỗi xảy ra. Vui lòng thử lại!');
        }
    }

    public function edit($id)
    {
        $this->authorize('update',Slider::class);
        $slider = Slider::find($id);
        if(is_null($slider))
            \abort(404);
        else{
            return view('admin.slider.edit',[
                'title'       => 'Sửa Slider',
                'arrLocation' => Slider::$arr_location,
                'slider'      => $slider
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $this->authorize('update',Slider::class);
        $request->validate(
            [
                'position' => 'required|integer',
                'image'    =>'image|mimes:jpeg,jpg,png|mimetypes:image/jpeg,image/png,image/jpg|max:50048',
            ],
            [
                'position.integer' => 'Thứ tự hiển thị phải nhập số',
                'position.required'=> 'Chưa nhập thứ tự hiển thị',
                'image.image'      => 'Ảnh Slider không đúng định dạng! (jpg, jpeg, png)',
            ]
        );
        $slider = Slider::find($id);
        if (!is_null($slider)){
            $status = Slider::ACTIVE;
            $nameFileOld = $slider->image;
            if ($request->status == null)
                $status = Slider::DISABLE;
            if ($request->link_target == null)
                $request->link_target = '#';
            if ($request->image != null){
                $nameFile = time().'.'.$request->image->extension();
            }else
                $nameFile = $nameFileOld;
            /** Update bản ghi */

            $input = [
                'name'       => $request->name,
                'location'   => $request->location,
                'link_target'=> $request->link_target,
                'image'      => $nameFile,
                'user_id'    => Auth::id(),
                'position'   => $request->position,
                'status'     => $status,
                'subtitle'   => $request->subtitle,
                'description'=> $request->description,
            ];

            try {
                DB::beginTransaction();
                $slider->update($input);
                DB::commit();
                if ($request->image != null){
                    /** Lưu ảnh mới vào folder */
                    $folder = 'upload/images/slider/';
                    CommonHelper::uploadImage($request->image,$nameFile,$folder);

                    /** Xoá ảnh cũ khi có upload ảnh mới  */
                    if ($nameFileOld != Slider::IMAGE){
                        CommonHelper::deleteImage($nameFileOld,$folder);
                    }
                }
                return redirect()->route('slider.index')->with('success','Sửa Slider thành công.');
            }catch (\Exception $exception){
                DB::rollBack();
                return redirect()->route('slider.index')->with('error','Đã có lỗi xảy ra. Vui lòng thử lại!');
            }
        }
        return redirect()->route('slider.index')->with('error','Đã có lỗi xảy ra. Vui lòng thử lại!');
    }

    public function destroy(Request $request)
    {
        $this->authorize('delete',Slider::class);
        $slider = Slider::find($request->id);
        if (!is_null($slider)){
            $slider->delete();
            if ($slider->image != Slider::IMAGE){
                $path = 'upload/images/slider/';
                CommonHelper::deleteImage($slider->image,$path);
            }
            return \json_encode(array('success'=>true));
        }
        return \json_encode(array('success'=>false));
    }

    public function deleteImg(Request $request){
        $this->authorize('update',Slider::class);
        if (!empty($request->id)){
            $slider = Slider::find($request->id);
            if (!is_null($slider)){
                if ($slider->image != Slider::IMAGE){
                    $folder = 'upload/images/slider/';
                    CommonHelper::deleteImage($slider->image,$folder);
                    $slider->update(['image'=>Slider::IMAGE]);
                }
                return \json_encode(array('success'=>true));
            }
        }
        return \json_encode(array('success'=>false));
    }
}
