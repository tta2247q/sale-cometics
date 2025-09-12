<header class="border-bottom">
  <nav class="navbar navbar-expand-lg bg-white">
    <div class="container-fluid">

      <!-- Logo -->
      <a class="navbar-brand" href="{{ route('home') }}">
        <img src="/assets/images/logo.jpg" style="height:50px;" alt="Logo">
      </a>

      <!-- Search (chỉ desktop) -->
      <div class="mx-auto d-none d-lg-block w-50">
        <form class="d-flex">
          <input type="text" class="form-control rounded-start" placeholder="Search...">
          <button class="btn btn-dark rounded-end" type="submit"><i class="bi bi-search"></i></button>
        </form>
      </div>

      <!-- Icons (chỉ desktop) -->
      <div class="ms-auto d-none d-lg-flex align-items-center gap-3">
        <!-- User -->
        <div class="dropdown">
          <a class="btn p-0" href="#" data-bs-toggle="dropdown"><i class="bi bi-person-circle fs-4"></i></a>
          <ul class="dropdown-menu dropdown-menu-end">
            @guest
              <li><a class="dropdown-item" href="{{ route('login') }}">Đăng nhập</a></li>
              <li><a class="dropdown-item" href="{{ route('register') }}">Đăng ký</a></li>
            @endguest
            @auth
              <li><a class="dropdown-item" href="{{ route('profile') }}">Trang cá nhân</a></li>
              <li>
                <form action="{{ route('logout') }}" method="POST">@csrf
                  <button class="dropdown-item" type="submit">Đăng xuất</button>
                </form>
              </li>
            @endauth
          </ul>
        </div>

        <!-- Cart -->
        <a href="{{ route('cart.index') }}" class="btn btn-light rounded-circle"
           style="width:45px;height:45px;">
          <i class="bi bi-basket3 fs-5"></i>
        </a>
      </div>

      <!-- Hamburger toggler (mobile) -->
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mainMenu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Offcanvas menu (mobile) -->
      <div class="offcanvas offcanvas-end" id="mainMenu">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title">Menu</h5>
          <button class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">

          <!-- Search (mobile only) -->
          <form class="d-none mb-3">
            <input type="text" class="form-control" placeholder="Search...">
            <button class="btn btn-dark ms-2" type="submit"><i class="bi bi-search"></i></button>
          </form>

          <!-- Icons (mobile only) -->
          <div class="d-none gap-3 mb-4">
            <a href="{{ route('login') }}" class="btn btn-light rounded-circle"><i class="bi bi-person-circle"></i></a>
            <a href="{{ route('cart.index') }}" class="btn btn-light rounded-circle"><i class="bi bi-basket3"></i></a>
          </div>

          <!-- Nav menu -->
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Sales</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Categories</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('products.list') }}">Fruits</a></li>
              </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="{{ route('news') }}">News</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
          </ul>
        </div>
      </div>

    </div>
  </nav>
</header>
