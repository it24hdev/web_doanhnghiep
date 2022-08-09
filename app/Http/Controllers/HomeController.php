<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
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
}
