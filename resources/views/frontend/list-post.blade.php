@extends('frontend.layouts.base')
@section('title')
    <title>Tin Tức - Trung tâm đào tạo ngonn ngữ Phương Đông VMA</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('asset/css/list-post.css')}}">
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
                    <span>Tin Tức</span>
                </div>
            </div>
        </div>
    </div>

    <div id="wp-content">
        <div class="container-content-post">
            <div class="content">
                <div class="content-left">
                    <ul>
                        <li>
                            <div class="wp-post">
                                <div class="thumb">
                                    <a href="">
                                        <img src="{{asset('asset/images/post-one.jpg')}}" alt="">
                                    </a>
                                    <div class="time">
                                        08/08/2022
                                    </div>
                                </div>
                                <div class="wp-detail">
                                    <a href="" class="title">How to ensure a direct hassle-free visa application</a>
                                    <div class="wp-cat-comment">
                                        <a href="" class="cat"><i class="fas fa-tags me-2"></i></i> Danh mục 1</a>
                                        <i class="fas fa-circle mx-2 cham"></i>
                                        <span class="comment"><i class="fad fa-comments me-2"></i> 2 Comments</span>
                                    </div>
                                    <div class="desc">
                                        There are full service engage company is to provide solution for employees needs training manage the entire HR department for companies. We offer comprehensive
                                        There are full service engage company is to provide solution for employees needs training manage the entire HR department for companies. We offer comprehensive
                                    </div>
                                    <div class="wp-action">
                                        <a href="" class="show"><i class="fal fa-horizontal-rule me-2"></i>Xem bài viết</a>
                                        <div class="share">
                                            <i class="fas fa-share-alt"></i>
                                            <div class="social display-none">
                                                <ul>
                                                    <li><a href="javascript:;"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fab fa-twitter"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="wp-post">
                                <div class="thumb">
                                    <a href="">
                                        <img src="{{asset('asset/images/post-one.jpg')}}" alt="">
                                    </a>
                                    <div class="time">
                                        08/08/2022
                                    </div>
                                </div>
                                <div class="wp-detail">
                                    <a href="" class="title">How to ensure a direct hassle-free visa application</a>
                                    <div class="wp-cat-comment">
                                        <a href="" class="cat"><i class="fas fa-tags me-2"></i></i> Danh mục 1</a>
                                        <i class="fas fa-circle mx-2 cham"></i>
                                        <span class="comment"><i class="fad fa-comments me-2"></i> 2 Comments</span>
                                    </div>
                                    <div class="desc">
                                        There are full service engage company is to provide solution for employees needs training manage the entire HR department for companies. We offer comprehensive
                                    </div>
                                    <div class="wp-action">
                                        <a href="" class="show"><i class="fal fa-horizontal-rule me-2"></i>Xem bài viết</a>
                                        <div class="share">
                                            <i class="fas fa-share-alt"></i>
                                            <div class="social display-none">
                                                <ul>
                                                    <li><a href="javascript:;"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fab fa-twitter"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="wp-post">
                                <div class="thumb">
                                    <a href="">
                                        <img src="{{asset('asset/images/post-one.jpg')}}" alt="">
                                    </a>
                                    <div class="time">
                                        08/08/2022
                                    </div>
                                </div>
                                <div class="wp-detail">
                                    <a href="" class="title">How to ensure a direct hassle-free visa application</a>
                                    <div class="wp-cat-comment">
                                        <a href="" class="cat"><i class="fas fa-tags me-2"></i></i> Danh mục 1</a>
                                        <i class="fas fa-circle mx-2 cham"></i>
                                        <span class="comment"><i class="fad fa-comments me-2"></i> 2 Comments</span>
                                    </div>
                                    <div class="desc">
                                        There are full service engage company is to provide solution for employees needs training manage the entire HR department for companies. We offer comprehensive
                                    </div>
                                    <div class="wp-action">
                                        <a href="" class="show"><i class="fal fa-horizontal-rule me-2"></i>Xem bài viết</a>
                                        <div class="share">
                                            <i class="fas fa-share-alt"></i>
                                            <div class="social display-none">
                                                <ul>
                                                    <li><a href="javascript:;"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fab fa-twitter"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="wp-post">
                                <div class="thumb">
                                    <a href="">
                                        <img src="{{asset('asset/images/post-one.jpg')}}" alt="">
                                    </a>
                                    <div class="time">
                                        08/08/2022
                                    </div>
                                </div>
                                <div class="wp-detail">
                                    <a href="" class="title">How to ensure a direct hassle-free visa application</a>
                                    <div class="wp-cat-comment">
                                        <a href="" class="cat"><i class="fas fa-tags me-2"></i></i> Danh mục 1</a>
                                        <i class="fas fa-circle mx-2 cham"></i>
                                        <span class="comment"><i class="fad fa-comments me-2"></i> 2 Comments</span>
                                    </div>
                                    <div class="desc">
                                        There are full service engage company is to provide solution for employees needs training manage the entire HR department for companies. We offer comprehensive
                                    </div>
                                    <div class="wp-action">
                                        <a href="" class="show"><i class="fal fa-horizontal-rule me-2"></i>Xem bài viết</a>
                                        <div class="share">
                                            <i class="fas fa-share-alt"></i>
                                            <div class="social display-none">
                                                <ul>
                                                    <li><a href="javascript:;"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fab fa-twitter"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="wp-post">
                                <div class="thumb">
                                    <a href="">
                                        <img src="{{asset('asset/images/post-one.jpg')}}" alt="">
                                    </a>
                                    <div class="time">
                                        08/08/2022
                                    </div>
                                </div>
                                <div class="wp-detail">
                                    <a href="" class="title">How to ensure a direct hassle-free visa application</a>
                                    <div class="wp-cat-comment">
                                        <a href="" class="cat"><i class="fas fa-tags me-2"></i></i> Danh mục 1</a>
                                        <i class="fas fa-circle mx-2 cham"></i>
                                        <span class="comment"><i class="fad fa-comments me-2"></i> 2 Comments</span>
                                    </div>
                                    <div class="desc">
                                        There are full service engage company is to provide solution for employees needs training manage the entire HR department for companies. We offer comprehensive
                                    </div>
                                    <div class="wp-action">
                                        <a href="" class="show"><i class="fal fa-horizontal-rule me-2"></i>Xem bài viết</a>
                                        <div class="share">
                                            <i class="fas fa-share-alt"></i>
                                            <div class="social display-none">
                                                <ul>
                                                    <li><a href="javascript:;"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fab fa-twitter"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="pagination">
                        <nav class="pagination">
                            <ul class="page-numbers">
                                <li>
                                    <span class="page-numbers current">1</span>
                                </li>
                                <li>
                                    <a href="#" class="page-numbers" >2</a>
                                </li>
                                <li>
                                    <a href="#" class="page-numbers" >3</a>
                                </li>
                                <li>
                                    <a href="#" class="page-numbers" >...</a>
                                </li>
                                <li>
                                    <a href="#" class="next page-numbers">
                                        <i class="fas fa-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="content-right">
                    <div class="wp-search wp-box-sidebar">
                        <form action="">
                            <input type="text" class="form-control" placeholder="Tìm kiếm...">
                            <button><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <div class="wp-box-sidebar list-cat">
                        <h3 class="header-box">Danh mục</h3>
                        <ul>
                            <li><a href="">Danh mục 1</a></li>
                            <li><a href="">Danh mục 2</a></li>
                            <li><a href="">Danh mục 3</a></li>
                            <li><a href="">Danh mục 4</a></li>
                            <li><a href="">Danh mục 5</a></li>
                        </ul>
                    </div>
                    <div class="wp-box-sidebar wp-post">
                        <h3 class="header-box">Bài viết mới nhất</h3>
                        <ul>
                            <li>
                                <a href="">
                                    <div class="thumb-post">
                                        <img src="{{asset('asset/images/post-one-150x150.jpg')}}" alt="">
                                    </div>
                                    <div class="info-post">
                                        <span class="time"><i class="fal fa-calendar-alt me-2"></i> 08/08/2022</span>
                                        <h4 class="title">Beat the peak with these top visa application tips!</h4>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="thumb-post">
                                        <img src="{{asset('asset/images/post-one-150x150.jpg')}}" alt="">
                                    </div>
                                    <div class="info-post">
                                        <span class="time"><i class="fal fa-calendar-alt me-2"></i> 08/08/2022</span>
                                        <h4 class="title">Beat the peak with these top visa application tips!</h4>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="thumb-post">
                                        <img src="{{asset('asset/images/post-one-150x150.jpg')}}" alt="">
                                    </div>
                                    <div class="info-post">
                                        <span class="time"><i class="fal fa-calendar-alt me-2"></i> 08/08/2022</span>
                                        <h4 class="title">Beat the peak with these top visa application tips!</h4>
                                    </div>
                                </a>
                            </li>
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

@section('js')
<script>
    $(document).ready(function(){
        $('.share').click(function(){
            $(this).children('.social').toggleClass('display-none');
        });
    })

</script>
@endsection
