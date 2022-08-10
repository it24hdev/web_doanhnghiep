<div class="backgroundmobile">
<div class="mobilenavs" id="mobilenav">
    <div class="menu-scroll-mobile">
      <span class="mobile-nav-close"><i class="fal fa-times"></i></span>
        <div class="mobile-nav-tabs">
            <ul>
            <li class="mobile-tab-title mobile-pages-title active" data-menu="pages"><span>Menu</span></li>
            </ul>
        </div>
    <nav id="subpage" class="mobile-menu-tab mobile-navigation mobile-pages-menu" aria-label="Mobile Navigation">
        <div class="handheld-navigation">
        <ul id="menu-main-menu" class="menu">
        <li class="menu-item "><a href="{{route('home')}}">Trang chủ</a>
            <button class="angledown"><i class="fal fa-angle-down fa-xs"></i></button>
        </li>
        <li class="menu-item "><a href="{{route('list-service')}}">Dịch vụ</a>
            <button class="angledown" id='menuitem-699'><i class="fal fa-angle-down fa-xs"></i></button>

            <ul class="sub-menu2" id='sub-menuitem-699' >
                @foreach($danhmucbaiviet as $dmbv)
                @if($dmbv->parent_id == 0)
                <li class="menu-item"><a href="{!! route('list-post_cat', ['slug' => $dmbv->slug]) !!}">{{$dmbv->name}}</a>

                    <button class="angledown2" id='menuitemlv2-{{$dmbv->id}}'><i class="fal fa-angle-down fa-xs"></i></button>


                     @if(count($dmbv->childs))
                    <ul class="sub-menu" id='sub-menuitemlv2-{{$dmbv->id}}' >
                        @foreach($danhmucbaiviet as $subdmbv)
                        @if($subdmbv->parent_id == $dmbv->id)
                        <li class="levelmenu_li1">
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
        <li class="menu-item "><a href=" {{route('contact')}}">Liên hệ</a>
            <button class="angledown" id='menuitem-699'><i class="fal fa-angle-down fa-xs"></i></button>
        </li>
        </ul>
        </div>
    </nav>

    </div>
</div>
</div>