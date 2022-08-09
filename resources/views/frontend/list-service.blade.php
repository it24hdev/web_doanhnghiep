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
                            <div class="background-icon">
                                <i class="fad fa-file-certificate"></i>
                            </div>
                            <div class="header-cat">
                                <i class="fad fa-file-certificate"></i>
                            </div>
                            <div class="content-cat">
                                <a href="">Đào tạo ngôn ngữ Trung Quốc</a>
                                <div class="detail">
                                    Đào tạo học viên kiến thức và giao tiếp tốt ngôn ngữ tiếng Trung từ cơ bản đến nâng cao.
                                </div>
                            </div>
                            <div class="bottom-cat">
                                <a href="">Xem nội dung chi tiết</a>
                            </div>
                        </div>
                    </div>

                    <div class="category">
                        <div class="wp-detail">
                            <div class="background-icon">
                                <i class="fad fa-certificate"></i>
                            </div>
                            <div class="header-cat">
                                <i class="fad fa-certificate"></i>
                            </div>
                            <div class="content-cat">
                                <a href="">Đào tạo Kỹ năng máy tính</a>
                                <div class="detail">
                                    Hỗ trợ học viên nắm được các kỹ năng máy tính văn phòng.
                                </div>
                            </div>
                            <div class="bottom-cat">
                                <a href="">Xem nội dung chi tiết</a>
                            </div>
                        </div>
                    </div>

                    <div class="category">
                        <div class="wp-detail">
                            <div class="background-icon">
                                <i class="fal fa-user-graduate"></i>
                            </div>
                            <div class="header-cat">
                                <i class="fal fa-user-graduate"></i>
                            </div>
                            <div class="content-cat">
                                <a href="">Lao động tại nước ngoài</a>
                                <div class="detail">
                                    Hỗ trợ học viên tham gia lao động nước ngoài với chi phí 0 đồng.
                                </div>
                            </div>
                            <div class="bottom-cat">
                                <a href="">Xem nội dung chi tiết</a>
                            </div>
                        </div>
                    </div>

                    <div class="category">
                        <div class="wp-detail">
                            <div class="background-icon">
                                <i class="fad fa-file-certificate"></i>
                            </div>
                            <div class="header-cat">
                                <i class="fad fa-file-certificate"></i>
                            </div>
                            <div class="content-cat">
                                <a href="">Đào tạo ngôn ngữ Trung Quốc</a>
                                <div class="detail">
                                    Đào tạo học viên kiến thức và giao tiếp tốt ngôn ngữ tiếng Trung từ cơ bản đến nâng cao.
                                </div>
                            </div>
                            <div class="bottom-cat">
                                <a href="">Xem nội dung chi tiết</a>
                            </div>
                        </div>
                    </div>

                    <div class="category">
                        <div class="wp-detail">
                            <div class="background-icon">
                                <i class="fad fa-certificate"></i>
                            </div>
                            <div class="header-cat">
                                <i class="fad fa-certificate"></i>
                            </div>
                            <div class="content-cat">
                                <a href="">Đào tạo Kỹ năng máy tính</a>
                                <div class="detail">
                                    Hỗ trợ học viên nắm được các kỹ năng máy tính văn phòng.
                                </div>
                            </div>
                            <div class="bottom-cat">
                                <a href="">Xem nội dung chi tiết</a>
                            </div>
                        </div>
                    </div>

                    <div class="category">
                        <div class="wp-detail">
                            <div class="background-icon">
                                <i class="fal fa-user-graduate"></i>
                            </div>
                            <div class="header-cat">
                                <i class="fal fa-user-graduate"></i>
                            </div>
                            <div class="content-cat">
                                <a href="">Lao động tại nước ngoài</a>
                                <div class="detail">
                                    Hỗ trợ học viên tham gia lao động nước ngoài với chi phí 0 đồng.
                                </div>
                            </div>
                            <div class="bottom-cat">
                                <a href="">Xem nội dung chi tiết</a>
                            </div>
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
