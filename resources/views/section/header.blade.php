<header>
    <nav class="navbar navbar-expand-lg bg-white border-bottom py-2">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <img src="logo.png" alt="Rose Beauty Logo" height="40">
            </a>

            <!-- Toggle button -->
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            {{--
            <div class="offcanvas offcanvas-start" tabindex="-1" id="mobileMenu">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav flex-column gap-2">
                        <li class="nav-item"><a class="nav-link" href="#">Trang chủ</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Giới thiệu</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Sản phẩm</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Danh mục 1</a></li>
                                <li><a class="dropdown-item" href="#">Danh mục 2</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#">Liên hệ</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Tin tức</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Giỏ hàng</a></li>
                    </ul>
                </div>
            </div> --}}

            <!-- Desktop menu -->
            <div class="collapse navbar-collapse d-none d-lg-block">
                <ul class="navbar-nav mx-auto gap-3 fw-semibold">
                    <li class="nav-item"><a class="nav-link" href="#">TRANG CHỦ</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">GIỚI THIỆU</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">SẢN PHẨM</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Danh mục 1</a></li>
                            <li><a class="dropdown-item" href="#">Danh mục 2</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">LIÊN HỆ</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">TIN TỨC</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">GIỎ HÀNG</a></li>
                </ul>
            </div>

            <!-- Icons -->
            <div class="d-flex align-items-center gap-3">
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
