@extends('frontend.layouts.base')
@section('title')
    <title>Tin Tức - Trung tâm đào tạo ngonn ngữ Phương Đông VMA</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('asset/css/detail-post.css')}}">
@endsection

@section('header')
    @include('frontend.layouts.header-home')
@endsection

@section('menu-mobile')
    @include('frontend.layouts.menu-mobile')
@endsection

@section('content')
    <div id="titlebar-inner-wrapper">
        <div class="container-content">
            <div class="wp-breadcrumb">
                <h2>Tin Tức</h2>
                <div class="breadcrumb-1">
                    <a href="{{route('home')}}">Trang chủ</a>/
                    <a href="{{route('list-post')}}">Tin tức</a>/
                    <span>{{$post->title}}</span>
                </div>
            </div>
        </div>
    </div>

    <div id="wp-content">
        <div class="container-content-post">
            <div class="content">
                <div class="content-left">
                    <div class="wp-post">
                        <div class="thumb">
                            <div class="img">
                                <img src="{{asset('upload/images/post/large/'.$post->thumb)}}" alt="">
                            </div>
                            <div class="time">
                                <i class="far fa-calendar-alt me-2"></i>{{\App\Helpers\CommonHelper::convertDateToDMY($post->created_at)}}
                            </div>
                        </div>
                        <div class="wp-detail">
                            <h3 class="title">{{$post->title}}</h3>
                            <div class="wp-cat-comment">
                                @foreach($post->category as $cat)
                                    <a href="" class="cat me-2"><i class="fas fa-tags me-2"></i></i> {{$cat->name}}</a>
                                @endforeach
                            </div>
                            <div class="desc">
                                {!! $post->content !!}
                            </div>
                            <div class="social">
                                <ul>
                                    <li><a href="javascript:;"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="javascript:;"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="content-right">
                    <div class="wp-search wp-box-sidebar">
                        <form action="{{route('list-post')}}">
                            <input type="text" name="tim-kiem" class="form-control" placeholder="Tìm kiếm...">
                            <button><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <div class="wp-box-sidebar list-cat">
                        <h3 class="header-box">Danh mục</h3>
                        <ul>
                            @foreach ($cat_parents as $cat)
                                <li>
                                    <a href="{{route('list-post_cat', $cat->slug)}}" class="@if(!empty($category_active) && ($category_active->id == $cat->id))
                                        active
                                        @endif">
                                        {{$cat->name}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="wp-box-sidebar wp-post">
                        <h3 class="header-box">Bài viết mới nhất</h3>
                        <ul>
                            @foreach ($list_post_sidebar as $item)
                                    <li>
                                        <a href="{{route('detail-post', $item->slug)}}">
                                            <div class="thumb-post">
                                                <img src="{{asset('upload/images/post/thumb/'.$item->thumb)}}" alt="">
                                            </div>
                                            <div class="info-post">
                                                <span class="time"><i class="fal fa-calendar-alt me-2"></i> {{\App\Helpers\CommonHelper::convertDateToDMY($item->created_at)}}</span>
                                                <h4 class="title">{{$item->title}}</h4>
                                            </div>
                                        </a>
                                    </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="wp-banner">
                        <ul>
                            <li>
                                <a href="tel:+84988758801">
                                    <img src="{{asset('asset/images/sidebar-banner02.jpg')}}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="tel:+84988758801">
                                    <img src="{{asset('asset/images/sidebar-banner02.jpg')}}" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('frontend.layouts.footer')
@endsection

