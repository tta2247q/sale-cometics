<div class="preloader-wrapper">
    <div class="preloader">
    </div>
</div>

<header class="d-none d-lg-block">
    <div class="container-fluid">
        <div class="row py-3 border-bottom">

            <div class="col-sm-4 col-lg-3 text-center text-sm-start">
                <div class="main-logo">
                    <a href="{{ route('home') }}">
                        <img src="/assets/images/logo.jpg" alt="logo" class=""
                            style="height: 60px; width: auto;">
                    </a>
                </div>
            </div>

            <div class="col-sm-6 offset-sm-2 offset-md-0 col-lg-5 d-none d-lg-block">
                <div class="search-bar row bg-light p-2 my-2 rounded-4">

                    <div class="col-11 col-md-11">
                        <form id="search-form" class="text-center" action="index.html" method="post">
                            <input type="text" class="form-control border-0 bg-transparent"
                                placeholder="Search for more than 20,000 products" />
                        </form>
                    </div>
                    <div class="col-md-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z" />
                        </svg>
                    </div>
                </div>
            </div>

            <div
                class="col-sm-8 col-lg-4 d-flex justify-content-end gap-5 align-items-center mt-4 mt-sm-0 justify-content-center justify-content-sm-end ">
                <div class="support-box text-end d-none d-xl-block">
                    <span class="fs-6 text-muted">For Support?</span>
                    <h5 class="mb-0">+974 899027</h5>
                </div>

                <ul class="d-none d-lg-flex justify-content-end list-unstyled m-0 ">
                    <div class="dropdown">
                        <a class="btn btn-user dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="bi bi-person-circle fs-4"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end">
                            @guest
                                <li>
                                    <a class="dropdown-item" href="{{ route('login') }}">Đăng nhập</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('register') }}">Đăng ký</a>
                                </li>
                            @endguest

                            @auth
                                <li>
                                    <a class="dropdown-item" href="{{ route('profile') }}">Trang cá nhân</a>
                                </li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button class="dropdown-item" type="submit">Đăng xuất</button>
                                    </form>
                                </li>
                            @endauth
                        </ul>
                    </div>
                    <li>
                        <a href="{{ route('cart.index') }}"
                            class="d-flex align-items-center justify-content-center rounded-circle bg-light mx-1"
                            style="width:50px; height:50px;">
                            <i class="bi bi-basket3 fs-4 text-dark"></i>
                        </a>
                    </li>


                </ul>

            </div>



        </div>
    </div>
    <div class="container-fluid">
        <div class="row py-3">
            <div class="d-flex  justify-content-center  align-items-center">
                <nav class="main-menu d-flex navbar navbar-expand-lg">
                    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header justify-content-center">
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end menu-list list-unstyled d-flex gap-md-3 mb-0">
                                <li class="nav-item active">
                                    <a href="{{ route('home') }}" class="nav-link active">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="" class="nav-link">Sales</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" role="button" id="pages"
                                        data-bs-toggle="dropdown" aria-expanded="false">Categories</a>
                                    <ul class="dropdown-menu" aria-labelledby="pages">
                                        <li><a href="{{ route('products.list') }}" class="dropdown-item">Fruids </a>
                                        </li>
                                        <li><a href="index.html" class="dropdown-item">Meets </a></li>
                                        <li><a href="index.html" class="dropdown-item">Vegetables </a></li>
                                        <li><a href="index.html" class="dropdown-item">Drinks </a></li>
                                        <li><a href="index.html" class="dropdown-item">Snacks </a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('news') }}" class="nav-link">News</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                                </li>
                            </ul>

                        </div>

                    </div>
            </div>
        </div>
    </div>
</header>
<header class="d-lg-none">
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
    <div class="container-fluid">

        <!-- Logo -->
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="/assets/images/logo.jpg" alt="logo" style="height: 50px; width: auto;">
        </a>

        <!-- Search (desktop) -->
        <form class="d-none d-lg-flex mx-auto" style="width: 50%;">
            <input type="text" class="form-control border-0 bg-light" placeholder="Search...">
            <button class="btn btn-dark ms-2" type="submit">
                <i class="bi bi-search"></i>
            </button>
        </form>

        <!-- Right side -->
        <div class="d-flex align-items-center gap-3">

            <!-- User Dropdown (desktop) -->
            <div class="dropdown d-none d-lg-block">
                <a class="btn btn-user dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="bi bi-person-circle fs-4"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    @guest
                        <li><a class="dropdown-item" href="{{ route('login') }}">Đăng nhập</a></li>
                        <li><a class="dropdown-item" href="{{ route('register') }}">Đăng ký</a></li>
                    @endguest
                    @auth
                        <li><a class="dropdown-item" href="{{ route('profile') }}">Trang cá nhân</a></li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST" class="m-0">
                                @csrf
                                <button class="dropdown-item" type="submit">Đăng xuất</button>
                            </form>
                        </li>
                    @endauth
                </ul>
            </div>

            <!-- Cart (desktop) -->
            <a href="{{ route('cart.index') }}" class="btn btn-light d-none d-lg-inline-flex rounded-circle">
                <i class="bi bi-basket3"></i>
            </a>

            <!-- Offcanvas toggle (mobile) -->
            <button class="btn btn-primary d-lg-none" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <i class="bi bi-list"></i>
            </button>
        </div>
    </div>

    <!-- Offcanvas (mobile menu) -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">

            <!-- Search (mobile) -->
            <form class="d-lg-none d-flex mb-3">
                <input type="text" class="form-control" placeholder="Search...">
                <button class="btn btn-dark ms-2" type="submit">
                    <i class="bi bi-search"></i>
                </button>
            </form>

            <!-- User + Cart icons (mobile) -->
            <div class="d-lg-none d-flex gap-3 mb-4">
                @guest
                    <a href="{{ route('login') }}" class="btn btn-light rounded-circle">
                        <i class="bi bi-person-circle"></i>
                    </a>
                @endguest
                @auth
                    <a href="{{ route('profile') }}" class="btn btn-light rounded-circle">
                        <i class="bi bi-person-circle"></i>
                    </a>
                @endauth
                <a href="{{ route('cart.index') }}" class="btn btn-light rounded-circle">
                    <i class="bi bi-basket3"></i>
                </a>
            </div>

            <!-- Nav menu -->
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Sales</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Categories</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('products.list') }}">Fruits</a></li>
                        <li><a class="dropdown-item" href="{{ route('products.list') }}">Vegetables</a></li>
                        <li><a class="dropdown-item" href="{{ route('products.list') }}">Snacks</a></li>
                        <li><a class="dropdown-item" href="{{ route('products.list') }}">Drinks</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('news') }}">News</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
            </ul>

        </div>
    </div>
</nav>


</header>
