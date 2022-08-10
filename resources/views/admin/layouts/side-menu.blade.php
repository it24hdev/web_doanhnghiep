<!-- BEGIN: Side Menu -->

<nav class="side-nav">
    <a href="{{ route('dashboard') }}" class="intro-x flex items-center pl-5 pt-4">
        <img alt="" class="w-6" style="width:100%; height:auto;" src="{{asset('asset/images/logo.png')}}">
        <span class="hidden xl:block text-white text-lg ml-3"></span>
    </a>
    <div class="side-nav__devider my-6"></div>
    @php
        $module_active = session('module_active');
    @endphp
    <ul>
        <li>
            <a href="{{ route('dashboard') }}"
                class="side-menu {{ $module_active == 'dashboard' ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                <div class="side-menu__title">
                    Dashboard
                    <div class="side-menu__sub-icon transform rotate-180"></div>
                </div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="side-menu {{ $module_active == 'post' ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                <div class="side-menu__title">
                    Bài viết
                    <div class="side-menu__sub-icon "> <i
                            data-feather="{{ $module_active == 'post' ? 'chevron-up' : 'chevron-down' }}"
                            class="{{ $module_active == 'post' ? 'menu__sub-icon transform rotate-180' : '' }}"></i>
                    </div>
                </div>
            </a>
            <ul class="{{ $module_active == 'post' ? 'side-menu__sub-open' : '' }}">
                @can('view', App\Models\Post::class)
                    <li>
                        <a href="{{ route('post.index') }}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Danh sách bài viết </div>
                        </a>
                    </li>
                @endcan
                @can('create', App\Models\Post::class)
                    <li>
                        <a href="{{ route('post.create') }}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Thêm mới </div>
                        </a>
                    </li>
                @endcan
                @can('viewAnypost', App\Models\Category::class)
                    <li>
                        <a href="{{ route('categorypost.index') }}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Danh mục bài viết </div>
                        </a>
                    </li>
                @endcan
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="side-menu {{ $module_active == 'service' ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-feather="award"></i> </div>
                <div class="side-menu__title">
                    Dịch vụ
                    <div class="side-menu__sub-icon "> <i
                            data-feather="{{ $module_active == 'service' ? 'chevron-up' : 'chevron-down' }}"
                            class="{{ $module_active == 'service' ? 'menu__sub-icon transform rotate-180' : '' }}"></i>
                    </div>
                </div>
            </a>
            <ul class="{{ $module_active == 'service' ? 'side-menu__sub-open' : '' }}">
                @can('view2', App\Models\Post::class)
                    <li>
                        <a href="{{ route('post2.index') }}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Danh sách dịch vụ </div>
                        </a>
                    </li>
                @endcan
                @can('create2', App\Models\Post::class)
                    <li>
                        <a href="{{ route('post2.create') }}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Thêm mới </div>
                        </a>
                    </li>
                @endcan
            </ul>
        </li>
        @can('view', App\Models\Customer::class)
        <li>
            <a href="{{ route('customer.list') }}"
                class="side-menu {{ $module_active == 'customer' ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                <div class="side-menu__title">
                    Khách hàng
                    <div class="side-menu__sub-icon transform rotate-180"></div>
                </div>
            </a>
        </li>
        @endcan
        <li>
            <a href="javascript:;" class="side-menu {{ $module_active == 'slider' ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-feather="layout"></i> </div>
                <div class="side-menu__title">
                    Slider
                    <div class="side-menu__sub-icon "> <i
                            data-feather="{{ $module_active == 'slider' ? 'chevron-up' : 'chevron-down' }}"
                            class="{{ $module_active == 'slider' ? 'menu__sub-icon transform rotate-180' : '' }}"></i>
                    </div>
                </div>
            </a>
            <ul class="{{ $module_active == 'slider' ? 'side-menu__sub-open' : '' }}">
                @can('view', App\Models\Slider::class)
                    <li>
                        <a href="{{ route('slider.index') }}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Danh sách Slider </div>
                        </a>
                    </li>
                @endcan
                @can('create', App\Models\Slider::class)
                    <li>
                        <a href="{{ route('slider.create') }}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Thêm mới </div>
                        </a>
                    </li>
                @endcan
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="side-menu {{ $module_active == 'user' ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-feather="user"></i> </div>
                <div class="side-menu__title">
                    Nhân viên
                    <div class="side-menu__sub-icon "> <i
                            data-feather="{{ $module_active == 'user' ? 'chevron-up' : 'chevron-down' }}"
                            class="{{ $module_active == 'user' ? 'menu__sub-icon transform rotate-180' : '' }}"></i>
                    </div>
                </div>
            </a>
            <ul class="{{ $module_active == 'user' ? 'side-menu__sub-open' : '' }}">
                @can('view', App\Models\User::class)
                    <li>
                        <a href="{{ route('user.list') }}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Danh sách nhân viên </div>
                        </a>
                    </li>
                @endcan
                @can('create', App\Models\User::class)
                    <li>
                        <a href="{{ route('admin.create') }}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Thêm mới </div>
                        </a>
                    </li>
                @endcan
            </ul>

        </li>
        <li>
            <a href="javascript:;" class="side-menu {{ $module_active == 'role' ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-feather="bookmark"></i> </div>
                <div class="side-menu__title">
                    Quyền quản trị
                    <div class="side-menu__sub-icon "> <i
                            data-feather="{{ $module_active == 'role' ? 'chevron-up' : 'chevron-down' }}"
                            class="{{ $module_active == 'role' ? 'menu__sub-icon transform rotate-180' : '' }}"></i>
                    </div>
                </div>
            </a>
            <ul class="{{ $module_active == 'role' ? 'side-menu__sub-open' : '' }}">
                @can('view', App\Models\Role::class)
                    <li>
                        <a href="{{ route('role.list') }}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Danh sách quyền </div>
                        </a>
                    </li>
                @endcan
                @can('create', App\Models\Role::class)
                    <li>
                        <a href="{{ route('role.create') }}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="side-menu__title"> Thêm mới </div>
                        </a>
                    </li>
                @endcan
            </ul>
        </li>
    </ul>
</nav>
<!-- END: Side Menu -->
