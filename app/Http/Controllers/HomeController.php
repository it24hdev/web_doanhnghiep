<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Category;
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
        return \view('frontend.list-post');
    }
    public function list_service(){
        return \view('frontend.list-service');
    }
    public function contact(){
        return \view('frontend.contact');
    }
    public function detail_post(){
        return \view('frontend.detail-post');
    }
    public function detail_service(){
        return \view('frontend.detail-service');
    }
}
