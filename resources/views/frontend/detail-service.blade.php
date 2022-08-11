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
                            <li><a href="{{route('detail-service',['slug' => $dsdv->slug])}}" class="{{($dsdv->id ==$chitietdichvu->id ) ? 'active' : ''}}">{{$dsdv->title}}<span><i class="fas fa-caret-right"></i></span></a></li>
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
                        <form action="{{route('contact_submit')}}" method="POST" class="form-input mb-4">
                            @csrf
                            <input type="text" name="name" class="form-control mb-3 " placeholder="Họ và tên (*)" required>
                            @error('name')
                                <span role="alert">
                                    <p class="text-danger fst-italic mb-3" style="font-size: 14px;">{{ $message }}</p>
                                </span>
                            @enderror
                            <input type="email" name="email" class="form-control mb-3 " placeholder="Email">
                            @error('email')
                                <span role="alert">
                                    <p class="text-danger fst-italic mb-3" style="font-size: 14px;">{{ $message }}</p>
                                </span>
                            @enderror
                            <input type="text" name="phone_number" class="form-control mb-3 " placeholder="Số điện thoại(*)" required>
                            @error('phone_number')
                                <span role="alert">
                                    <p class="text-danger fst-italic mb-3" style="font-size: 14px;">{{ $message }}</p>
                                </span>
                            @enderror
                            <textarea name="note" id="" rows="3" class="form-control mb-3 " placeholder="Ghi chú"></textarea>
                            @error('note')
                                <span role="alert">
                                    <p class="text-danger fst-italic mb-3" style="font-size: 14px;">{{ $message }}</p>
                                </span>
                            @enderror
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

