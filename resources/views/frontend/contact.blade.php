@extends('frontend.layouts.base')
@section('title')
    <title>Liên Hệ - Trung tâm đào tạo ngonn ngữ Phương Đông VMA</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('asset/css/contact.css')}}">
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
                <h2>Liên Hệ</h2>
                <div class="breadcrumb-1">
                    <a href="{{route('home')}}">Trang chủ</a>/
                    <span>Liên Hệ</span>
                </div>
            </div>
        </div>
    </div>

    <div id="wp-content">
        <div class="wp-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59709.3489580225!2d106.70520392613277!3d20.716951820144793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a727755bb7385%3A0x3cf955ed51781583!2zU8ahbiBMxqE!5e0!3m2!1svi!2s!4v1660027029592!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="wp-form-contact">
            <div class="wp-form">
                <div class="form-contact">
                    <div class="content-left">
                        <div class="box-1">
                            <h4>Địa chỉ</h4>
                            <p>Đường 403 Đại Lộc 5 - Kiến Thụy - Hải Phòng</p>
                            <h4>Liên hệ qua email</h4>
                            <a href="mailto:contact@gmail.com">contact@gmail.com</a>
                        </div>
                        <div class="box-2">
                            <p>Chúng tôi sẽ liên hệ lại với bạn, hoặc gọi ngay cho chúng tôi:</p>
                            <a href="tel:+84988758801"><span class="icon"><i class="fas fa-phone-alt"></i></span> <span class="phone"><p>0988 758 801</p></span></a>
                        </div>
                    </div>
                    <div class="form-input">
                        <div class="wp-header">
                            <h4>Tư vấn miễn phí</h4>
                            <h2>Để lại thông tin nhận <strong>tư vấn online</strong></h2>
                        </div>
                        <form action="">
                            <input type="text" name="name" class="form-control mb-3 " placeholder="Họ và tên (*)" required>
                            <input type="email" name="email" class="form-control mb-3 " placeholder="Email">
                            <input type="text" name="phone_number" class="form-control mb-3 " placeholder="Số điện thoại(*)" required>
                            <textarea name="note" id="" cols="30" rows="6" class="form-control mb-3 " placeholder="Ghi chú"></textarea>
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
