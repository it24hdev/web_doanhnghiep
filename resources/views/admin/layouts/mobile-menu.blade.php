<div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar">
        <a href="{{ route('dashboard') }}" class="flex mr-auto">
            <img alt="" class="w-6"  style="width:150px; height:auto;" src="{{asset('asset/images/logo.png')}}">
        </a>
        <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2"
                class="w-8 h-8 text-white transform -rotate-90"></i> </a>
    </div>
    @php
        $module_active = session('module_active');
    @endphp
    <ul class="border-t border-theme-29 py-5 hidden">
        <li>
            <a href="{{ route('dashboard') }}" class="menu {{ $module_active == 'dashboard' ? 'menu--active' : '' }}">
                <div class="menu__icon"> <i data-feather="home"></i> </div>
                <div class="menu__title">
                    Dashboard
                    <div class="menu__sub-icon transform rotate-180"></div>
                </div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="menu {{ $module_active == 'post' ? 'menu--active' : '' }}">
                <div class="menu__icon"> <i data-feather="file-text"></i> </div>
                <div class="menu__title">
                    Bài viết
                    <div class="menu__sub-icon "> <i
                            data-feather="{{ $module_active == 'post' ? 'chevron-up' : 'chevron-down' }}"
                            class="{{ $module_active == 'post' ? 'menu__sub-icon transform rotate-180' : '' }}"></i>
                    </div>
                </div>
            </a>
            <ul class="{{ $module_active == 'post' ? 'menu__sub-open' : '' }}">
                @can('view', App\Models\Post::class)
                    <li>
                        <a href="{{ route('post.index') }}" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Danh sách bài viết </div>
                        </a>
                    </li>
                @endcan
                @can('create', App\Models\Post::class)
                    <li>
                        <a href="{{ route('post.create') }}" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Thêm mới </div>
                        </a>
                    </li>
                @endcan
                @can('viewAnypost', App\Models\Category::class)
                    <li>
                        <a href="{{ route('categorypost.index') }}" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Danh mục bài viết </div>
                        </a>
                    </li>
                @endcan
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="menu {{ $module_active == 'service' ? 'menu--active' : '' }}">
                <div class="menu__icon"> <i data-feather="award"></i> </div>
                <div class="menu__title">
                    Dịch vụ
                    <div class="menu__sub-icon "> <i
                            data-feather="{{ $module_active == 'service' ? 'chevron-up' : 'chevron-down' }}"
                            class="{{ $module_active == 'service' ? 'menu__sub-icon transform rotate-180' : '' }}"></i>
                    </div>
                </div>
            </a>
            <ul class="{{ $module_active == 'service' ? 'menu__sub-open' : '' }}">
                @can('view2', App\Models\Post::class)
                    <li>
                        <a href="{{ route('post2.index') }}" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Danh sách bài viết </div>
                        </a>
                    </li>
                @endcan
                @can('create2', App\Models\Post::class)
                    <li>
                        <a href="{{ route('post2.create') }}" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Thêm mới </div>
                        </a>
                    </li>
                @endcan
            </ul>
        </li>
        @can('view', App\Models\Post::class)
        <li>
            <a href="{{ route('customer.list') }}" class="menu {{ $module_active == 'customer' ? 'menu--active' : '' }}">
                <div class="menu__icon"> <i data-feather="home"></i> </div>
                <div class="menu__title">
                    Khách hàng
                    <div class="menu__sub-icon transform rotate-180"></div>
                </div>
            </a>
        </li>
        @endcan
        <li>
            <a href="javascript:;" class="menu {{ $module_active == 'slider' ? 'menu--active' : '' }}">
                <div class="menu__icon"> <i data-feather="layout"></i> </div>
                <div class="menu__title">
                    Slider
                    <div class="menu__sub-icon "> <i
                            data-feather="{{ $module_active == 'slider' ? 'chevron-up' : 'chevron-down' }}"
                            class="{{ $module_active == 'slider' ? 'menu__sub-icon transform rotate-180' : '' }}"></i>
                    </div>
                </div>
            </a>
            <ul class="{{ $module_active == 'slider' ? 'menu__sub-open' : '' }}">
                @can('view', App\Models\Slider::class)
                    <li>
                        <a href="{{ route('slider.index') }}" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Danh sách Slider </div>
                        </a>
                    </li>
                @endcan
                @can('create', App\Models\Slider::class)
                    <li>
                        <a href="{{ route('slider.create') }}" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Thêm mới </div>
                        </a>
                    </li>
                @endcan
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="menu {{ (($module_active == 'user') || ( $module_active == 'role')) ? 'menu--active' : '' }}">
                <div class="menu__icon"> <i data-feather="settings"></i> </div>
                <div class="menu__title">
                    Nhân viên
                    <div class="menu__sub-icon "> <i
                            data-feather="{{ (($module_active == 'user') || ( $module_active == 'role')) ? 'chevron-up' : 'chevron-down' }}"
                            class="{{ (($module_active == 'user') || ( $module_active == 'role')) ? 'menu__sub-icon transform rotate-180' : '' }}"></i>
                    </div>
                </div>
            </a>
            <ul class="{{ (($module_active == 'user') || ( $module_active == 'role')) ? 'menu__sub-open' : '' }}">
                @can('view', App\Models\User::class)
                    <li>
                        <a href="{{ route('user.list') }}" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Danh sách nhân viên </div>
                        </a>
                    </li>
                @endcan
                @can('create', App\Models\User::class)
                    <li>
                        <a href="{{ route('admin.create') }}" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Thêm mới nhân viên</div>
                        </a>
                    </li>
                @endcan
                @can('view', App\Models\Role::class)
                    <li>
                        <a href="{{ route('role.list') }}" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Danh sách quyền </div>
                        </a>
                    </li>
                @endcan
                @can('create', App\Models\Role::class)
                    <li>
                        <a href="{{ route('role.create') }}" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Thêm mới quyền</div>
                        </a>
                    </li>
                @endcan
            </ul>
        </li>
        {{-- <li>
            <a href="javascript:;" class="menu {{ $module_active == 'role' ? 'menu--active' : '' }}">
                <div class="menu__icon"> <i data-feather="bookmark"></i> </div>
                <div class="menu__title">
                    Quyền quản trị
                    <div class="menu__sub-icon "> <i
                            data-feather="{{ $module_active == 'role' ? 'chevron-up' : 'chevron-down' }}"
                            class="{{ $module_active == 'role' ? 'menu__sub-icon transform rotate-180' : '' }}"></i>
                    </div>
                </div>
            </a>
            <ul class="{{ $module_active == 'role' ? 'menu__sub-open' : '' }}">
                @can('view', App\Models\Role::class)
                    <li>
                        <a href="{{ route('role.list') }}" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Danh sách quyền </div>
                        </a>
                    </li>
                @endcan
                @can('create', App\Models\Role::class)
                    <li>
                        <a href="{{ route('role.create') }}" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Thêm mới </div>
                        </a>
                    </li>
                @endcan
            </ul>
        </li> --}}
    </ul>
</div>
