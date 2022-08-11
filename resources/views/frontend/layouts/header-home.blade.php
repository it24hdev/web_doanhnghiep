
<header class="col-12">
    <div class="header_bar">

        {{-- top menu --}}
        <div class="top_bar_wrapper topbar_show_mobile_no transparent_topbar transparent_border_topbar ">
            <div class="top_bar max_header">
                <div class="left-top-widet">
                    <ul class="xoxo">
                        <li class="widget-container social_sidebar" id="social_widget_top-4">
                            <div class="social_sidebar_internal">
                                <a href="javascript:;" target="_blank">
                                   <i class="fal fa-alarm-clock"></i>Thứ 2 - Thứ 7 8.00 - 17.30
                                </a>
                                <a href="javascript:;" target="_blank">
                                    <i class="fal fa-map-marker-alt"></i>Đường 403 Đại Lộc 5 - Kiến Thụy - Hải Phòng
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="right-top-widet">
                    <ul class="xoxo">
                        <li class="widget_text widget-container" id="custom_html-6">
                            <div class="textwidget custom-html-widget">
                                <i class="fal fa-envelope"></i>
                                contact@mail.com
                            </div>
                        </li>
                        <li class="widget_text widget-container widget_custom_html" id="custom_html-6" style="background: #0073b1;">
                            <div class="textwidget ">
                               <a href="#" target="_blank" >
                                 <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </li>
                        <li class="widget_text widget-container widget_custom_html" id="custom_html-6" style="background: #33ccff;">
                            <div class="textwidget">
                               <a href="#" target="_blank" >
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </div>
                        </li>
                        <li class="widget_text widget-container widget_custom_html" id="custom_html-6" style="background: #c4302b;">
                            <div class="textwidget">
                               <a href="#" target="_blank" >
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </li>
                        <li class="widget_text widget-container widget_custom_html" id="custom_html-6" style="background: #385da9;">
                            <div class="textwidget">
                               <a href="https://facebook.com/tiengtrungtimesvn" target="_blank" >
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </div>
                        </li>
                        <li class="widget_text widget-container " id="custom_html-3">
                            <div class="textwidget custom-html-widget">
                                <i class="fal fa-phone"></i>
                                <a href="tel:+84988755801">
                                   0988.758.801
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        {{-- end top menu --}}

        {{-- mobile --}}
        <div class="mobile_header mobile_header_sticky_no">
            <div class="mobile-trigger" id="iconmenumobile">
                <i class="fas fa-bars">
                </i>
            </div>
            <div class="mobile-logo">
                <a href="{{route('home')}}">
                    <img alt="image" class="img-responsive retina_ready" src="{{asset('asset/images/logo.png')}}">
                </a>
            </div>
            <div class="mobile-trigger-user">
               <i class="far fa-search search_bar2" toggle="#search2"></i>
            </div>
            <div class="cmt-search-overlay2 st-show" id="search2">
                    <form action="#" class="cmt-site-searchform" method="get">
                        <div class="w-search-form-h">
                            <div class="w-search-form-row">
                                <div class="w-search-input">
                                    <input class="field searchform-s" name="s" placeholder="Tìm kiếm..." type="search">
                                        <button type="submit">
                                             <i class="far fa-search"></i>
                                        </button>
                                    </input>
                                </div>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
        {{-- end mobile --}}

        {{-- menu --}}
        <div class="header_wrapper header_type1 header_center hover_type_3 header_alignment_text_left">
            <div class="header_wrapper_inside full_width_header max_header">
                <div class="logo">
                    <a href="{{route('home')}}">
                        <img alt="company logo" class="img-responsive retina_ready" id="logo_image" src="{{asset('asset/images/logo.png')}}" style="margin-top:0px;"/>
                    </a>

                </div>
                <div class="user_menu user_not_loged" id="user_menu_u">
                <div class="submit_action">
                <i class="far fa-search search_bar" toggle="#search"></i>
                </div>

                <div class="cmt-search-overlay st-show" id="search">
                    <form action="{{route('list-post')}}" class="cmt-site-searchform" method="get">
                        <div class="w-search-form-h">
                            <div class="w-search-form-row">
                                <div class="w-search-input">
                                    <input class="field searchform-s" name="tim-kiem" placeholder="Tìm kiếm..." type="search">
                                        <button type="submit">
                                             <i class="far fa-search"></i>
                                        </button>
                                    </input>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="header_phone">
                <a href="tel:+84988755801">Nhận tư vấn!</a>
                </div>
                </div>
                <nav id="access">
                    <div class="menu-mega-menu-container">
                        <ul class="menu" id="menu-mega-menu">
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children no-megamenu " id="menu-item-7999">
                                <a class="menu-item-link" href="{{route('home')}}">
                                    Trang chủ
                                </a>
                            </li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children no-megamenu " id="menu-item-7999">
                                <a class="menu-item-link" href="{{route('list-service')}}">
                                    Dịch vụ
                                </a>
                            </li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children no-megamenu submenu_ul">
                                <a class="menu-item-link" href="{{route('list-post')}}">
                                    Tin tức
                                </a>
                                <ul class=" sub-menu " style="">
                                    @foreach($danhmucbaiviet as $dmbv)
                                    @if($dmbv->parent_id == 0)
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children submenu_ul2" >
                                        <a class="menu-item-link" href="{!! route('list-post_cat', ['slug' => $dmbv->slug]) !!}">
                                          {{$dmbv->name}}
                                        </a>
                                        @if(count($dmbv->childs))
                                        <ul class=" sub-menu " style="">
                                             @foreach($danhmucbaiviet as $subdmbv)
                                             @if($subdmbv->parent_id == $dmbv->id)
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page " id="menu-item-28330">
                                                <a class="menu-item-link" href="{!! route('list-post_cat', ['slug' => $subdmbv->slug]) !!}">
                                                     {{$subdmbv->name}}
                                                </a>
                                            </li>
                                            @endif
                                            @endforeach
                                        </ul>
                                        @endif
                                    </li>
                                    @endif
                                    @endforeach
                                </ul>
                            </li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children no-megamenu " id="menu-item-7999">
                                <a class="menu-item-link" href="{{route('contact')}}">
                                    Liên hệ
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        {{-- end menu --}}
    </div>
</header>

{{-- icon ho tro --}}

<div class="cmt_floting_customsett">
    <a href="tel:+84988755801" target="_blank" class="cmttheme_fbar_icons">
       <i class="fas fa-headset"></i>
        <span>Hỗ trợ</span>
    </a>
    <a href="#" target="_blank" class="cmttheme_fbar_icons">
        <i class="fab fa-facebook-messenger"></i>
        <span>Messenger</span>
    </a>
    <a href="#" target="_blank" class="cmttheme_fbar_icons">
        <i class="fab fa-facebook"></i>
        <span class="buy_link"><span>Facebook</span></span>
    </a>
</div>
<a id="scroll_up" class="top-visible"><i class="fal fa-angle-up"></i></a>
