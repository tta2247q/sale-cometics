<div class="preloader-wrapper">
    <div class="preloader">
    </div>
</div>

<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasSearch" aria-labelledby="Search">
    <div class="offcanvas-header justify-content-center">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="order-md-last">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-primary">Search</span>
            </h4>
            <form role="search" action="index.html" method="get" class="d-flex mt-3 gap-0">
                <input class="form-control rounded-start rounded-0 bg-light" type="email"
                    placeholder="What are you looking for?" aria-label="What are you looking for?">
                <button class="btn btn-dark rounded-end rounded-0" type="submit">Search</button>
            </form>
        </div>
    </div>
</div>

<header>
    <div class="container-fluid">
        <div class="row py-3 border-bottom">

            <div class="col-sm-4 col-lg-3 text-center text-sm-start">
                <div class="main-logo">
                    <a href="{{route('home')}}">
                        <img src="/assets/images/logo.jpg" alt="logo" class=""
                            style="height: 60px; width: auto;">
                    </a>
                </div>
            </div>

            <div class="col-sm-6 offset-sm-2 offset-md-0 col-lg-5 d-none d-lg-block">
                <div class="search-bar row bg-light p-2 my-2 rounded-4">
                    <div class="col-md-4 d-none d-md-block">
                        <select class="form-select border-0 bg-transparent">
                            <option>All Categories</option>
                            <option>Groceries</option>
                            <option>Drinks</option>
                            <option>Chocolates</option>
                        </select>
                    </div>
                    <div class="col-11 col-md-7">
                        <form id="search-form" class="text-center" action="index.html" method="post">
                            <input type="text" class="form-control border-0 bg-transparent"
                                placeholder="Search for more than 20,000 products" />
                        </form>
                    </div>
                    <div class="col-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z" />
                        </svg>
                    </div>
                </div>
            </div>

            <div
                class="col-sm-8 col-lg-4 d-flex justify-content-end gap-5 align-items-center mt-4 mt-sm-0 justify-content-center justify-content-sm-end">
                <div class="support-box text-end d-none d-xl-block">
                    <span class="fs-6 text-muted">For Support?</span>
                    <h5 class="mb-0">+974 899027</h5>
                </div>

                <ul class="d-flex justify-content-end list-unstyled m-0">
                    <li>
                        <a href="{{ route('login') }}"
                            class="d-flex align-items-center justify-content-center rounded-circle bg-light mx-1"
                            style="width:50px; height:50px;">
                            <i class="bi bi-person-fill fs-4 text-dark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('cart.index') }}"
                            class="d-flex align-items-center justify-content-center rounded-circle bg-light mx-1"
                            style="width:50px; height:50px;">
                            <i class="bi bi-basket3 fs-4 text-dark"></i>
                        </a>
                    </li>

                    <li class="d-lg-none">
                        <a href="#" class="rounded-circle bg-light p-2 mx-1">

                        </a>
                    </li>
                    <li class="d-lg-none">
                        <a href="#" class="rounded-circle bg-light p-2 mx-1" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasSearch" aria-controls="offcanvasSearch">
                            <svg width="24" height="24" viewBox="0 0 24 24">
                                <use xlink:href="#search"></use>
                            </svg>
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

                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
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
                                    <a href="{{route('news')}}" class="nav-link">News</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('contact')}}" class="nav-link">Contact</a>
                                </li>
                            </ul>

                        </div>

                    </div>
            </div>
        </div>
    </div>
</header>
