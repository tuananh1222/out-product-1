{{-- <div class="loader">
    <div class="loader-inner">
        <div class="circle"></div>
    </div>
</div> --}}
<!--PreLoader Ends-->

<!-- header -->
<div class="top-header-area" id="sticker">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 text-center">
                <div class="main-menu-wrap">
                    <!-- logo -->
                    <div class="site-logo">
                        <a href="{{ route('home') }}">
                            <img src="https://theme.hstatic.net/1000220636/1000304408/14/logo.png?v=74" alt="" style="    width: 63px;
                            height: 45px;
                            object-fit: cover;">
                        </a>
                    </div>
                    <!-- logo -->

                    <!-- menu start -->
                    <nav class="main-menu">
                        <ul>
                            <li class="{{ request()->is('/*') ? "current-list-item" : "" }}">
                                <a href="{{ route('home') }}">Trang chủ</a>
                            </li>
                            <li class="{{ request()->is('category*') || request()->is('child-category*') ? "current-list-item" : "" }}">
                                <a href="#">Danh mục</a>
                                <ul class="sub-menu" style="width: max-content;
                                    overflow: auto;
                                    height: 50vh;">
                                    @foreach ($categories as $parent)                                       
                                        <li>
                                            <a href="{{ route('category-products', $parent->id) }}" class="{{ ($parentCategoryOfCurrentCategory == $parent->id || $parent->id == $categoryId) ? "active-menu" : "" }}">
                                                {{ $parent->name }}
                                            </a>
                                        </li>                                      
                                        @foreach ($parent->children as $child)
                                            <li style="margin-left: 20px">
                                                <a href="{{ route('child-category-products', $child->id) }}" class="{{ ($child->id == $categoryId) ? "active-menu" : "" }}">
                                                    {{ $child->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    @endforeach
                                </ul>
                            </li>
                            <li class="{{ request()->is('about-us*') ? "current-list-item" : "" }}">
                                <a href="{{ route('about-us') }}">Giới thiệu</a>
                            </li>
                            <li class="{{ request()->is('contact-us*') ? "current-list-item" : "" }}">
                                <a href="{{ route('contact-us') }}">Liên hệ</a>
                            </li>
                            <li class="{{ request()->is('news*') || request()->is('cart*') || request()->is('order*') ? "current-list-item" : "" }}">
                                <a href="#">Thông tin khác</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="{{ route('news') }}" class="{{ request()->is('news*') ? "active-menu" : "" }}">Tin tức</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('cart') }}" class="{{ request()->is('cart*') ? "active-menu" : "" }}">Giỏ hàng</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('user-order') }}" class="{{ request()->is('order*') ? "active-menu" : "" }}">Đơn hàng của bạn</a>
                                    </li>
                                    @if (Auth::check())
                                        <li>
                                            <form action="{{ route('logout-client') }}" method="POST" style="display: inline-block">
                                                @csrf
                                                <button type="submit" style="    border: none;
                                                background: none;
                                                outline: none;
                                                cursor: pointer;">
                                                    <a class="nav-link">
                                                        ({{ Auth()->user()->name }}) Đăng xuất
                                                    </a>
                                                </button>
                                            </form>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ route('login-client') }}">Đăng nhập</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('register-client') }}">Đăng ký</a>
                                        </li>
                                    @endif
                                </ul>
                            </li>
                            <li>
                                <div class="header-icons">
                                    <a class="shopping-cart" href="{{ route('cart') }}">
                                        <i class="fas fa-shopping-cart {{ request()->is('cart*') ? "active-menu" : "" }}"></i>
                                    </a>
                                    <a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="search-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <span class="close-btn"><i class="fas fa-window-close"></i></span>
                <form action="{{ route('search') }}" method="GET" style="height: 100%">
                    <div class="search-bar">
                        <div class="search-bar-tablecell">
                            <h3>Tìm kiếm sản phẩm:</h3>
                            <input type="text" placeholder="Từ khóa" name="key">
                            <button type="submit">Search<i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>