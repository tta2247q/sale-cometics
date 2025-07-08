<header>
    <nav class="navbar navbar-expand-lg bg-white border-bottom py-2 shadow-sm">
        <div class="container d-flex align-items-center justify-content-between">
            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <img src="/images/logo.png" alt="Rose Beauty Logo" height="40">
            </a>

            <!-- Toggle button -->
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-start d-lg-none" tabindex="-1" id="mobileMenu">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav flex-column gap-2">
                        <li class="nav-item"><a class="nav-link" href="#">Trang chủ</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Giới thiệu</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">Sản phẩm</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Danh mục 1</a></li>
                                <li><a class="dropdown-item" href="#">Danh mục 2</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#">Liên hệ</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Tin tức</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Giỏ hàng</a></li>
                    </ul>
                    <div class="d-flex gap-3 mt-4 d-lg-none">
                        <a href="#" class="text-dark fs-5" aria-label="Search"><i class="bi bi-search"></i></a>
                        <a href="#" class="text-dark fs-5" aria-label="Account"><i class="bi bi-person"></i></a>
                        <a href="#" class="text-dark position-relative fs-5" aria-label="Cart">
                            <i class="bi bi-bag"></i>
                            <span
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">0</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Desktop menu -->
            <div class="collapse navbar-collapse d-none d-lg-block">
                <ul class="navbar-nav mx-auto gap-lg-3 fw-semibold">
                    <li class="nav-item px-lg-3"><a class="nav-link" href="#">@lang('message.home')</a></li>
                    <li class="nav-item px-lg-3"><a class="nav-link" href="#">GIỚI THIỆU</a></li>
                    <li class="nav-item dropdown px-lg-3">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">SẢN PHẨM</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Danh mục 1</a></li>
                            <li><a class="dropdown-item" href="#">Danh mục 2</a></li>
                        </ul>
                    </li>
                    <li class="nav-item px-lg-3"><a class="nav-link" href="#">LIÊN HỆ</a></li>
                    <li class="nav-item px-lg-3"><a class="nav-link" href="#">TIN TỨC</a></li>
                    <li class="nav-item px-lg-3"><a class="nav-link" href="#">GIỎ HÀNG</a></li>
                </ul>
            </div>
            <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="languageDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ strtoupper(app()->getLocale()) }}
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                            <li><a class="dropdown-item" href="{{ route('language.switch', 'en') }}">English</a></li>
                            <li><a class="dropdown-item" href="{{ route('language.switch', 'vi') }}">Tiếng Việt</a></li>
                            <li><a class="dropdown-item" href="{{ route('language.switch', 'fr') }}">Français</a></li>
                            <li><a class="dropdown-item" href="{{ route('language.switch', 'ja') }}">日本語</a></li>
                        </ul>
                    </div>

            <!-- Icons -->
            <div class="d-none d-lg-flex align-items-center gap-3">
                <a href="#" class="text-dark fs-5" aria-label="Search"><i class="bi bi-search"></i></a>
                <a href="#" class="text-dark fs-5" aria-label="Account"><i class="bi bi-person"></i></a>
                <a href="#" class="text-dark position-relative fs-5" aria-label="Cart">
                    <i class="bi bi-bag"></i>
                    <span
                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">0</span>
                </a>
            </div>
        </div>
    </nav>
</header>
