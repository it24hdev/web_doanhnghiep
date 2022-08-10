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
        $danhsachdichvu_footer  = Post::where('status' , '=' , 1)
                                ->where('service', '=' , 1)
                                ->orderby('id','asc')->limit(5)->get();
        $danhsachbaiviet_footer = Post::where('status' , '=' , 1)
                                ->where('service', '=' , 2)
                                ->orderby('created_at','desc')->limit(3)->get();
        $danhmucbaiviet  = Category::where('status','=',1)->orderby('id','asc')->get();
        $sliders = DB::table('sliders')->where('location',2)->where('status', 1)->orderBy('position', 'ASC')->get();
        return view('frontend.index',
            [
                'danhmucbaiviet'          => $danhmucbaiviet,
                'sliders'                 => $sliders,
                'danhsachdichvu_footer'   => $danhsachdichvu_footer,
                'danhsachbaiviet_footer'  => $danhsachbaiviet_footer,
            ]);
    }
    public function list_post(){

        $danhsachdichvu_footer  = Post::where('status' , '=' , 1)
                                ->where('service', '=' , 1)
                                ->orderby('id','asc')->limit(5)->get();
        $danhsachbaiviet_footer = Post::where('status' , '=' , 1)
                                ->where('service', '=' , 2)
                                ->orderby('created_at','desc')->limit(3)->get();


        $danhmucbaiviet = Category::where('status','=',1)->orderby('id','asc')->get();
        return \view('frontend.list-post',[
            'danhmucbaiviet'          => $danhmucbaiviet,
            'danhsachdichvu_footer'   => $danhsachdichvu_footer,
            'danhsachbaiviet_footer'  => $danhsachbaiviet_footer,
        ]);
    }
    public function list_service(){

        $danhsachdichvu_footer  = Post::where('status' , '=' , 1)
                                ->where('service', '=' , 1)
                                ->orderby('id','asc')->limit(5)->get();
        $danhsachbaiviet_footer = Post::where('status' , '=' , 1)
                                ->where('service', '=' , 2)
                                ->orderby('created_at','desc')->limit(3)->get();
        $danhsachdichvu = Post::where('status' , '=' , 1)
                                ->where('service', '=' , 1)
                                ->orderby('id','asc')->get();
        $danhmucbaiviet = Category::where('status','=',1)->orderby('id','asc')->get();
        return \view('frontend.list-service',
            [ 
                'danhmucbaiviet'          => $danhmucbaiviet,
                'danhsachdichvu'          => $danhsachdichvu,
                'danhsachdichvu_footer'   => $danhsachdichvu_footer,
                'danhsachbaiviet_footer'  => $danhsachbaiviet_footer,
            ]);
    }
    public function contact(){
        $danhsachdichvu_footer  = Post::where('status' , '=' , 1)
                                ->where('service', '=' , 1)
                                ->orderby('id','asc')->limit(5)->get();
        $danhsachbaiviet_footer = Post::where('status' , '=' , 1)
                                ->where('service', '=' , 2)
                                ->orderby('created_at','desc')->limit(3)->get();
        $danhmucbaiviet = Category::where('status','=',1)->orderby('id','asc')->get();
        return \view('frontend.contact',[
            'danhmucbaiviet'          => $danhmucbaiviet,
            'danhsachdichvu_footer'   => $danhsachdichvu_footer,
            'danhsachbaiviet_footer'  => $danhsachbaiviet_footer,
        ]);
    }
    public function detail_post(){
        $danhsachdichvu_footer  = Post::where('status' , '=' , 1)
                                ->where('service', '=' , 1)
                                ->orderby('id','asc')->limit(5)->get();
        $danhsachbaiviet_footer = Post::where('status' , '=' , 1)
                                ->where('service', '=' , 2)
                                ->orderby('created_at','desc')->limit(3)->get();
        $danhmucbaiviet = Category::where('status','=',1)->orderby('id','asc')->get();
        return \view('frontend.detail-post',[
            'danhmucbaiviet'          => $danhmucbaiviet,
            'danhsachdichvu_footer'   => $danhsachdichvu_footer,
            'danhsachbaiviet_footer'  => $danhsachbaiviet_footer,
        ]);
    }
    public function detail_service($slug){
        $danhsachdichvu_footer  = Post::where('status' , '=' , 1)
                                ->where('service', '=' , 1)
                                ->orderby('id','asc')->limit(5)->get();
        $danhsachbaiviet_footer = Post::where('status' , '=' , 1)
                                ->where('service', '=' , 2)
                                ->orderby('created_at','desc')->limit(3)->get();
        $chitietdichvu  = Post::where('slug','=',$slug)->first();
        $danhsachdichvu = Post::where('status' , '=' , 1)
                                ->where('service', '=' , 1)
                                ->orderby('id','asc')->get();
        $danhmucbaiviet = Category::where('status','=',1)->orderby('id','asc')->get();
        return \view('frontend.detail-service',
             [ 
                'danhmucbaiviet'          => $danhmucbaiviet,
                'danhsachdichvu'          => $danhsachdichvu,
                'chitietdichvu'           => $chitietdichvu,
                'danhsachdichvu_footer'   => $danhsachdichvu_footer,
                'danhsachbaiviet_footer'  => $danhsachbaiviet_footer,
            ]);
    }
}
