<nav class="navbar navbar-expand navbar-light bg-white shadow-sm mt-2 mb-4">
    <div class="container-fluid">
        <button class="btn btn-outline-secondary d-md-none me-2" type="button"
            data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar">
            ☰
        </button>
        <span class="navbar-brand">Dashboard</span>
        <form class="d-flex ms-auto">
            <input class="form-control me-2" type="search" placeholder="Search" />
            <button class="btn btn-outline-primary">Search</button>
        </form>
    </div>
</nav>

<div class="offcanvas offcanvas-start d-md-none" tabindex="-1" id="mobileSidebar">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <a href="{{route('dashboard')}}" class="d-block mb-2 text-decoration-none text-dark fw-bold">Dashboard</a>
        <a href="#" class="d-block mb-2 text-decoration-none text-dark fw-bold">Users</a>
        <a href="#" class="d-block mb-2 text-decoration-none text-dark fw-bold">Orders</a>
        <a href="{{route('Admin.products.index')}}" class="d-block mb-2 text-decoration-none text-dark fw-bold">Products</a>
        <a href="#" class="d-block mb-2 text-decoration-none text-dark fw-bold">Settings</a>
        <a href="#" class="d-block mb-2 text-decoration-none text-dark fw-bold">Logout</a>
    </div>
</div>
