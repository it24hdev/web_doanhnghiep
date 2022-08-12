@extends('frontend.layouts.base')
@section('title')
    <title>Trung tâm đào tạo ngôn ngữ Phương Đông VMA</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('asset/css/content-home.css')}}">
@endsection

@section('header')
    @include('frontend.layouts.header-home')
@endsection

@section('menu-mobile')
    @include('frontend.layouts.menu-mobile')
@endsection



@section('slider')
    <div id="content1" style=" padding-top: 0px;">
        <div class="slider-home container-wp col-12" style="max-width: 1350px; padding: 0px; margin-left: auto; margin-right: auto;">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    @php
                        $t=-1;
                    @endphp
                    @foreach ($sliders as $slider)
                        @php
                            $t++;
                        @endphp
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$t}}" class="{{($t==0) ? 'active' : ''}}" aria-current="{{($t==0) ? 'true' : ''}}" aria-label="Slide {{$t+1}}"></button>
                    @endforeach
                </div>
                <div class="carousel-inner rounded-2">
                    @php
                        $e=0;
                    @endphp
                    @foreach ($sliders as $slider)
                    @php
                         $e++;
                    @endphp
                    <div class="carousel-item {{($e == 1) ? 'active' : ''}}">
                        <div class=" carousel_style  ">
                            <img src="{{asset('upload/images/slider/'.$slider->image)}}">
                        </div>
                        <div class="descriptionheader">{!! $slider->description!!}</div>
                    </div>
                    @endforeach
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="background_header_shadow"></div>
         <div class="header_phone" style="display: none;"><a  href="tel:800-555-6789">Đăng ký ngay!</a></div>
            </div>

        </div>

    </div>
@endsection

@section('content')
    <div id="wp-content">
        <div class="wp-first-content">
            <div class="container-content">
                <div class="first-content">
                    <div class="background-top"></div>
                    <div class="image">
                        <div class="background-img"></div>
                    </div>
                    <div class="detail">
                        <h4>Chào mừng bạn đến với chúng tôi</h4>
                        <h2>Trung tâm ngoại ngữ <br><strong>Phương Đông VMA</strong></h2>
                        <div class="desc">
                            Tự hào là một trong những đơn vị tiên phong trong lĩnh vực đào tạo ngoại ngữ tiếng Trung hàng đầu tại Hải Phòng. Phương Đông VMA cam kết với lộ trình học cùng đội ngũ giảng viên, trợ giảng giàu kinh nghiệm, đảm bảo chất lượng đào tạo, giúp học viên nâng cao khả năng sử dụng tiếng Trung chuyên nghiệp, sát với thực tế môi trường làm việc, hỗ trợ làm việc tại Trung Quốc với mức lương tốt nhất.
                        </div>
                        <div class="wp-icon">
                            <div class="icon">
                                <div class="box-icon"><i class="far fa-file-certificate"></i></div>
                                <div class="info">
                                    <h4>Ngôn ngữ Trung Quốc</h4>
                                    <p>Nắm vững tiếng Trung, kỹ năng từ vựng chuyên ngành cơ bản</p>
                                </div>
                            </div>
                            <div class="icon">
                                <div class="box-icon"><i class="fal fa-user-graduate"></i></div>
                                <div class="info">
                                    <h4>Xuất khẩu lao động</h4>
                                    <p>Lương khởi điểm 30 - 60 triệu, chi phí xuất ngoại 0 đồng</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="wp-category">
            <div class="container-content">
                <div class="content-header">
                    <h4>Dịch vụ của chúng tôi</h4>
                    <h2>Đào tạo ngôn ngữ Trung Quốc - <strong> Hỗ trợ việc làm nước ngoài</strong></h2>
                </div>
                <div class="list-category owl-carousel owl-theme" id="list-category">
                    @foreach($danhsachdichvu as $dsdv)
                    <div class="category">

                        <div class="wp-detail">

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

                        </div>

                    </div>
                     @endforeach
                </div>
                <div class="text">Hãy liên hệ với chúng tôi để nhận được trợ giúp tốt nhất. <a href="{{route('list-service')}}">Xem thêm</a></div>
            </div>
        </div>

        <div class="wp-register">
            <div class="container-content">
                <div class="wp-header-register">
                    <h4>Đăng ký học viên</h4>
                    <h2>Các bước để trở thành học viên của chúng tôi</h2>
                </div>
                <div class="wp-content-register">
                    <div class="wp-detail">
                        <div class="detail">
                            <div class="header-detail">
                                <div class="border-header"></div>
                                <span>1</span>
                            </div>
                            <div class="body-detail">
                                <div class="icon"><i class="fal fa-file-signature"></i></div>
                                <h2>Đăng ký tư vấn online</h2>
                                <div class="desc">
                                    Để lại thông tin hoặc liên hệ trực tiếp để nhận tư vấn từ chúng tôi
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wp-detail">
                        <div class="detail">
                            <div class="header-detail">
                                <div class="border-header"></div>
                                <span>2</span>
                            </div>
                            <div class="body-detail">
                                <div class="icon"><i class="fal fa-user-headset"></i></div>
                                <h2>Chuyên viên tư vấn</h2>
                                <div class="desc">
                                    Chúng tôi sẽ liên hệ đến bạn để tư vấn chi tiết
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wp-detail">
                        <div class="detail">
                            <div class="header-detail">
                                <div class="border-header"></div>
                                <span>3</span>
                            </div>
                            <div class="body-detail">
                                <div class="icon"><i class="far fa-mail-bulk"></i></div>
                                <h2>Nộp hồ sơ đăng ký</h2>
                                <div class="desc">
                                    Chuẩn bị hồ sơ như hướng dẫn và nộp tại văn phòng
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wp-detail">
                        <div class="detail">
                            <div class="header-detail">
                                <span>4</span>
                            </div>
                            <div class="body-detail">
                                <div class="icon"><i class="fal fa-user-graduate"></i></div>
                                <h2>Trở thàn học viên</h2>
                                <div class="desc">
                                    Bắt đầu các trường trình đào tạo chuyên nghiệp cùng chúng tôi
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="wp-why-choose">
            <div class="container-content">
                <div class="why-choose">
                    <div class="wp-detail">
                        <div class="header-detail">
                            <h2>Tại sao chọn chúng tôi</h2>
                            <h4>Tại sao bạn nên chọn <strong>trung tâm ngoại ngữ Phương Đông VMA?</strong></h4>
                        </div>
                        <div class="content-detail">
                            <div class="desc-1">
                                Môi trường đào tạo chuyên nghiệp, kiến thức kỹ năng thực tế và chuyên sâu.
                            </div>
                            <div class="desc-2">
                                Với đội ngũ giảng viên nhiều năm kinh nghiệp, các học viên tham gia khóa học sẽ tự tin sử dụng và giao tiếp bằng tiếng Trung.
                                Cùng với đó là kỹ năng sử dụng máy tính văn phòng nâng cao. Kết thúc khóa học với nhiều cơ hội việc làm nước ngoài thu nhập cao, chi phí 0 đồng.
                            </div>
                            <div class="wp-icon">
                                <div class="icon">
                                    <div class="box-icon"><i class="fad fa-user-md-chat"></i></div>
                                </div>
                                <div class="info">
                                    <h4>Giao tiếp tiếng Trung</h4>
                                    <p>Tự tin giao tiếp bằng ngôn ngữ Trung Quốc sau khi tham gia khóa học</p>
                                </div>
                            </div>
                            <div class="wp-icon">
                                <div class="icon">
                                    <div class="box-icon">
                                        <i class="fad fa-user-hard-hat"></i>
                                    </div>
                                </div>
                                <div class="info">
                                    <h4>Cơ hội việc làm nước ngoài</h4>
                                    <p>Tham gia lao động nước ngoài với mức lương từ 30 - 60 triệu.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wp-image">
                        <ul>
                            <li>
                                <div class="image">
                                    <img src="{{asset('asset/images/image-1.png')}}" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="image">
                                    <img src="{{asset('asset/images/image-2.png')}}" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="image">
                                    <img src="{{asset('asset/images/image-3.png')}}" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="image">
                                    <img src="{{asset('asset/images/image-4.png')}}" alt="">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="wp-banner-primary">
            <div class="container-content">
                <div class="wp-box-banner">
                    <div class="image">
                        <img src="{{asset('asset/images/image-5.jpg')}}" alt="">
                    </div>
                    <div class="wp-detail">
                        <h4>Nâng tầm giá trị</h4>
                        <h2>Chúng tôi đã hỗ trợ nhiều học viên <strong>nâng cao ngôn ngữ tiếng Trung</strong> và bắt đầu công việc với <strong>thu nhập mong muốn</strong></h2>
                        <a href="{{route('contact')}}">Liên hệ với chúng tôi</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="wp-list-post">
            <div class="container-content">
                <div class="wp-header-post">
                    <h2>Tin tức</h2>
                    <h4>Cập nhật tin tức cùng chúng tôi</h4>
                </div>
                <div class="wp-content-post">
                    <div class="list-post owl-carousel">
                        @foreach ($posts as $post)
                            <div class="wp-post">
                                <div class="image">
                                    <a href="{{route('detail-post', $post->slug)}}" class="img">
                                        <img src="{{asset('upload/images/post/medium/'.$post->thumb)}}" alt="">
                                    </a>
                                    @foreach($post->category as $cat)
                                        <a href="{{route('list-post_cat', $cat->slug)}}" class="cat-post me-2">{{$cat->name}}</a>
                                    @endforeach
                                </div>
                                <div class="wp-detail">
                                    <div class="time"><i class="far fa-calendar-alt me-2"></i>{{\App\Helpers\CommonHelper::convertDateToDMY($post->created_at)}}</div>
                                    <a href="{{route('detail-post', $post->slug)}}" class="title">{{$post->title}}</a>
                                    <div class="desc">
                                        {{ $post->excerpt }}
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="text">Hãy liên hệ với chúng tôi để nhận được trợ giúp tốt nhất! <a href="{{route('list-post')}}">Xem thêm tin tức</a></div>
        </div>
    </div>
@endsection

@section('footer')
    @include('frontend.layouts.footer')
@endsection

@section('js')
    <script>
        $('#list-category').owlCarousel({
            loop:true,
            margin:0,
            nav:false,
            dots:false,
            autoplay:true,
            autoplayTimeout:4500,
            autoplayHoverPause: true,
            responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    1024:{
                        items:3
                    },
                }
        });
        $('.list-post').owlCarousel({
            loop:true,
            margin:30,
            nav:false,
            dots:false,
            autoplay:true,
            autoplayTimeout:4500,
            autoplayHoverPause: true,
            responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    1024:{
                        items:3
                    },
                }
        });
    </script>

    <script>
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            loop: true,
            nav: true,
            autoplay: true,
            autoplayTimeout: 4500,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
            },
        });


    });
</script>
@endsection
