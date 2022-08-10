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
                    @if (empty($category_active))
                        <a href="{{route('home')}}">Trang chủ</a>/
                        <span>Tin Tức</span>
                    @else
                        <a href="{{route('home')}}">Trang chủ</a>/
                        <a href="{{route('list-post')}}">Tin Tức</a>/
                        <span>{{$category_active->name}}</span>
                    @endif

                </div>
            </div>
        </div>
    </div>

    <div id="wp-content">
        <div class="container-content-post">
            <div class="content">
                <div class="content-left">
                    <ul>
                        @if ($posts->count() > 0)
                            @foreach ($posts as $post)
                                <li>
                                    <div class="wp-post">
                                        <div class="thumb">
                                            <a href="{{route('detail-post', $post->slug)}}">
                                                <img src="{{asset('upload/images/post/large/'.$post->thumb)}}" alt="">
                                            </a>
                                            <div class="time">
                                                <i class="far fa-calendar-alt me-2"></i>{{\App\Helpers\CommonHelper::convertDateToDMY($post->created_at)}}
                                            </div>
                                        </div>
                                        <div class="wp-detail">
                                            <a href="{{route('detail-post', $post->slug)}}" class="title">{{$post->title}}</a>
                                            <div class="wp-cat-comment">
                                                @foreach($post->category as $cat)
                                                    <a href="{{route('list-post_cat', $cat->slug)}}" class="cat me-2"><i class="fas fa-tags me-2"></i></i> {{$cat->name}}</a>
                                                @endforeach
                                            </div>
                                            <div class="desc">
                                                {{$post->excerpt}}
                                            </div>
                                            <div class="wp-action">
                                                <a href="{{route('detail-post', $post->slug)}}" class="show"><i class="fal fa-horizontal-rule me-2"></i>Xem bài viết</a>
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
                            @endforeach
                        @else
                            <li class="py-5"><p class="text-center">Không tìm thấy thông tin nào!</p></li>
                        @endif
                    </ul>
                    {!! $posts->links('frontend.pagination') !!}
                </div>
                <div class="content-right">
                    <div class="wp-search wp-box-sidebar">
                        <form action="">
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
                            @php
                            $t = 0;
                            @endphp
                            @foreach ($list_post_sidebar as $post)
                                @php
                                $t++;
                                @endphp
                                @if ($t<=3)
                                    <li>
                                        <a href="{{route('detail-post', $post->slug)}}">
                                            <div class="thumb-post">
                                                <img src="{{asset('upload/images/post/thumb/'.$post->thumb)}}" alt="">
                                            </div>
                                            <div class="info-post">
                                                <span class="time"><i class="fal fa-calendar-alt me-2"></i> {{\App\Helpers\CommonHelper::convertDateToDMY($post->created_at)}}</span>
                                                <h4 class="title">{{$post->title}}</h4>
                                            </div>
                                        </a>
                                    </li>
                                @endif
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

@section('js')
<script>
    $(document).ready(function(){
        $('.share').click(function(){
            $(this).children('.social').toggleClass('display-none');
        });
    })

</script>
@endsection
