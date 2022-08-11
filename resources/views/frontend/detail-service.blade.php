@extends('frontend.layouts.base')
@section('title')
    <title>Dịch Vụ - Trung tâm đào tạo ngonn ngữ Phương Đông VMA</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('asset/css/detail-service.css')}}">
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

                <h2>{{$chitietdichvu->title}}</h2>
                <div class="breadcrumb-1">
                    <a href="{{route('home')}}">Trang chủ</a>/
                    <a href="{{route('list-post')}}">Dịch vụ</a>/
                    <span>{{$chitietdichvu->title}}</span>
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
                                <img src="{{asset('upload/images/post/large/'.$chitietdichvu->thumb)}}" alt="">
                            </div>
                        </div>
                        <div class="wp-detail">
                            <div class="desc">

                               {!! $chitietdichvu->content !!}
                            </div>
                        </div>
                    </div>

                </div>
                <div class="content-right">
                    <div class="list-service">
                        <ul>
                            @foreach($danhsachdichvu  as $dsdv)
                            <li><a href="{{route('detail-service',['slug' => $dsdv->slug])}}" class="active">{{$dsdv->title}}<span><i class="fas fa-caret-right"></i></span></a></li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="wp-banner">
                        <ul>
                            <li>
                                @foreach($banner as $bn)
                                <a href="{{$bn->link_target}}">
                                    <img src="{{asset('upload/images/slider/'.$bn->image)}}" alt="">
                                </a>
                                @endforeach
                            </li>
                        </ul>
                    </div>

                    <div class="wp-box-sidebar">
                        <h3 class="header-box">Tư vấn miễn phí</h3>
                        <form action="" class="mb-4 form-input">
                            <input type="text" name="name" class="form-control mb-3" placeholder="Họ tên (*)" required>
                            <input type="email" name="email" class="form-control mb-3" placeholder="Email">
                            <input type="email" name="phone_number" class="form-control mb-3" placeholder="Số điện thoại (*)" required>
                            <textarea name="note" id="" rows="4" class="form-control mb-3 " placeholder="Ghi chú"></textarea>
                            <button>Gửi thông tin</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('frontend.layouts.footer')
@endsection

