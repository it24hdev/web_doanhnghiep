<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        $danhmucbaiviet = Category::where('status','=',1)->orderby('id','asc')->get();
        $sliders = DB::table('sliders')->where('location',2)->where('status', 1)->orderBy('position', 'ASC')->get();
        return view('frontend.index',
            [
                'danhmucbaiviet'  => $danhmucbaiviet,
                'sliders'         => $sliders,
            ]);
    }
    public function list_post(){
        $danhmucbaiviet = Category::where('status','=',1)->orderby('id','asc')->get();
        return \view('frontend.list-post',[  'danhmucbaiviet'  => $danhmucbaiviet]);
    }
    public function list_service(){
        $danhsachdichvu = Post::where('status' , '=' , 1)
                                ->where('service', '=' , 1)
                                ->orderby('id','asc')->get();
        $danhmucbaiviet = Category::where('status','=',1)->orderby('id','asc')->get();
        return \view('frontend.list-service',
            [ 
                'danhmucbaiviet'  => $danhmucbaiviet,
                'danhsachdichvu'  => $danhsachdichvu,
            ]);
    }
    public function contact(){
        $danhmucbaiviet = Category::where('status','=',1)->orderby('id','asc')->get();
        return \view('frontend.contact',[  'danhmucbaiviet'  => $danhmucbaiviet]);
    }
    public function detail_post(){
        $danhmucbaiviet = Category::where('status','=',1)->orderby('id','asc')->get();
        return \view('frontend.detail-post',[  'danhmucbaiviet'  => $danhmucbaiviet]);
    }
    public function detail_service($slug){
        $chitietdichvu  = Post::where('slug','=',$slug)->first();
        $danhsachdichvu = Post::where('status' , '=' , 1)
                                ->where('service', '=' , 1)
                                ->orderby('id','asc')->get();
        $danhmucbaiviet = Category::where('status','=',1)->orderby('id','asc')->get();
        return \view('frontend.detail-service',
             [ 
                'danhmucbaiviet'  => $danhmucbaiviet,
                'danhsachdichvu'  => $danhsachdichvu,
                'chitietdichvu'   => $chitietdichvu,
            ]);
    }
}
