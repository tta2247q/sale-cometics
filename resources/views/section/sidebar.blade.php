<nav class="col-md-2 d-none d-md-block sidebar ">
    <div class="position-sticky pt-3">
        <h4 class=" text-center mb-4">Admin</h4>

        <a href="{{ route('dashboard') }}" class="d-block  mb-2">
            <i class="bi bi-speedometer2 me-2"></i>Dashboard
        </a>

        <a href="{{ route('Admin.users.index') }}" class="d-block  mb-2">
            <i class="bi bi-people me-2"></i>Users
        </a>

        <a href="#" class="d-block  mb-2">
            <i class="bi bi-receipt me-2"></i>Orders
        </a>

        <!-- Dropdown Products -->
        <a class="d-block  mb-2" data-bs-toggle="collapse" href="#productMenu" role="button"
            aria-expanded="false" aria-controls="productMenu">
            <i class="bi bi-box-seam me-2"></i>Products <i class="bi bi-caret-down-fill float-end"></i>
        </a>
        <div class="collapse ps-4" id="productMenu">
            <a href="{{ route('Admin.products.index') }}" class="d-block  mb-2">All Products</a>
            <a href="{{ route('Admin.products.create') }}" class="d-block  mb-2">Add Product</a>
            <a href="{{ route('categories') }}" class="d-block  mb-2">Categories</a>
        </div>

        <a href="#" class="d-block  mb-2">
            <i class="bi bi-gear me-2"></i>Settings
        </a>

        <a href="#" class="d-block "
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="bi bi-box-arrow-right me-2"></i>Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</nav>
