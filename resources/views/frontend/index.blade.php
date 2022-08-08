@extends('frontend.layouts.base')

@section('css')
    <link rel="stylesheet" href="{{asset('asset/css/content-home.css')}}">
@endsection

@section('header')
    @include('frontend.layouts.header-home')
@endsection

@section('slider')
    @include('frontend.layouts.slider')
@endsection

@section('menu-mobile')
    @include('frontend.layouts.menu-mobile')
@endsection

@section('content')
    <div id="wp-content">
        <div class="wp-first-content">
            <div class="container-content">
                <div class="first-content">
                    <div class="background-top"></div>
                    <div class="image">
                        <div class="border-top-image"></div>
                        <div class="background-img"></div>
                    </div>
                    <div class="detail">
                        <h4>Chào mừng bạn đến với chúng tôi</h4>
                        <h2>Trung tâm ngoại ngữ <br><strong>Phương Đông</strong></h2>
                        <div class="desc">
                            Do nhu cầu học tập ngôn ngữ Trung Quốc ngày càng tăng cao nhưng chất lượng đào tạo chung chung không có sự chuyên nghiệp và thực tế khi đi làm.
                            Chúng tôi đã nghiên cứu và đưa vào đào tạo lộ trình giúp học viên nâng cao khả năng sử dụng tiếng Trung chuyên nghiệp, sát với thực tế môi trường làm việc. Hỗ trợ làm việc nước ngoài với mức lương tốt.
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
                    <div class="category">
                        <div class="wp-detail">
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
                <div class="text">Hãy liên hệ với chúng tôi để nhận được trợ giúp tốt nhất. <a href="">Xem thêm</a></div>
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
                            <h4>Tại sao bạn nên chọn <strong>trung tâm ngoại ngữ Phương Đông?</strong></h4>
                        </div>
                        <div class="content-detail">
                            <div class="desc-1">
                                Môi trường đào tạo chuyên nghiệp, kiến thức kỹ năng thực tế và chuyên sâu.
                            </div>
                            <div class="desc-2">
                                Với đội ngũ giảng viên nhiều năm kinh nghiệp, các học viên tham gia khóa học sẽ tự tin sử dụng và giao tiếp bằng tiếng Trung.
                                Cũng với đó là kỹ năng sử dụng máy tính văn phòng nâng cao. Kết thúc khóa học với nhiều cơ hội việc làm nước ngoài thu nhập cao, chi phí 0 đồng.
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
                        <h4>Chúng tôi tạo sự khác biệt</h4>
                        <h2>Chúng tôi đã hỗ trợ nhiều học viên <strong>nâng cao ngôn ngữ tiếng Trung</strong> và bắt đầu công việc với <strong>thu nhập mong muốn</strong></h2>
                        <a href="">Liên hệ với chúng tôi</a>
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
                        <div class="wp-post">
                            <div class="image">
                                <a href="" class="img">
                                    <img src="{{asset('asset/images/post-one-720x630.jpg')}}" alt="">
                                </a>
                                <a href="" class="cat-post">Danh mục 1</a>
                            </div>
                            <div class="wp-detail">
                                <div class="time">08/08/2022</div>
                                <a href="" class="title">How to ensure a direct hassle-free visa application</a>
                                <div class="desc">
                                    There are full service engage company is to provide solution for employees needs trai...
                                </div>
                            </div>
                        </div>
                        <div class="wp-post">
                            <div class="image">
                                <a href="" class="img">
                                    <img src="{{asset('asset/images/post-three-720x630.jpg')}}" alt="">
                                </a>
                                <a href="" class="cat-post">Danh mục 2</a>
                            </div>
                            <div class="wp-detail">
                                <div class="time">08/08/2022</div>
                                <a href="" class="title">How to ensure a direct hassle-free visa application</a>
                                <div class="desc">
                                    There are full service engage company is to provide solution for employees needs trai...
                                </div>
                            </div>
                        </div>
                        <div class="wp-post">
                            <div class="image">
                                <a href="" class="img">
                                    <img src="{{asset('asset/images/post-one-720x630.jpg')}}" alt="">
                                </a>
                                <a href="" class="cat-post">Danh mục 3</a>
                            </div>
                            <div class="wp-detail">
                                <div class="time">08/08/2022</div>
                                <a href="" class="title">How to ensure a direct hassle-free visa application</a>
                                <div class="desc">
                                    There are full service engage company is to provide solution for employees needs trai...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text">Hãy liên hệ với chúng tôi để nhận được trợ giúp tốt nhất! <a href="">Xem thêm tin tức</a></div>
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
@endsection
