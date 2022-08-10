@extends('frontend.layouts.base')
@section('title')
    <title>Dịch Vụ - Trung tâm đào tạo ngonn ngữ Phương Đông VMA</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('asset/css/list-service.css')}}">
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
                <h2>Dịch Vụ</h2>
                <div class="breadcrumb-1">
                    <a href="{{route('home')}}">Trang chủ</a>/
                    <span>Dịch Vụ</span>
                </div>
            </div>
        </div>
    </div>
    <div id="wp-content">
        <div class="wp-category">
            <div class="container-content">
                <div class="list-category">

                    <div class="category">
                        <div class="wp-detail">
                            @foreach($danhsachdichvu as $dsdv)
                            <div class="background-icon">
                               {!! $dsdv->icon !!}
                            </div>
                            <div class="header-cat">
                                {!! $dsdv->icon !!}
                            </div>
                            <div class="content-cat">
                                <a href="{{route('detail-service',['slug' => $dsdv->slug])}}">{{$dsdv->title}}</a>
                                <div class="detail">
                                    {{$dsdv->excerpt}}
                                </div>
                            </div>
                            <div class="bottom-cat">
                                <a href="{{route('detail-service',['slug' => $dsdv->slug])}}">Xem nội dung chi tiết</a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('frontend.layouts.footer')
@endsection
