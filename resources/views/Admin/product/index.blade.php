@extends('Admin.index')
@section('content')
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Users</h5>
                    <p class="card-text">1500</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Orders</h5>
                    <p class="card-text">320</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-warning mb-3">
                <div class="card-body">
                    <h5 class="card-title">Product</h5>
                    <p class="card-text">{{ $totalProducts }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-danger mb-3">
                <div class="card-body">
                    <h5 class="card-title">Alerts</h5>
                    <p class="card-text">5</p>
                </div>
            </div>
        </div>
    </div>

    <a href="{{ route('Admin.products.create') }}" type="button" class="btn btn-secondary btn-lg mb-3"
        style="width:100px">Add</a>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="card mb-4">
        <div class="card-header">
            <h5>Product List</h5>
        </div>
        <div class="row g-4">
            @foreach ($products as $product)
                <div class="col-md-3">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top"
                            style="height:200px; object-fit:contain; padding: 10px;" alt="{{ $product->name }}">
                        <div class="card-body d-flex flex-column">
                            <h6 class="card-title">{{ $product->name }}</h6>
                            <p class="mb-1"><strong>{{ number_format($product->price, 0, ',', '.') }}đ</strong></p>
                            <small class="text-muted">SL: {{ $product->quantity }}</small>
                            <div class="mt-auto d-flex gap-2">
                                <a href="{{ route('Admin.products.edit', $product->id) }}"
                                    class="btn btn-sm btn-warning">Sửa</a>
                                <form action="{{ route('Admin.products.destroy', $product->id) }}" method="POST"
                                    onsubmit="return confirm('Bạn có chắc muốn xóa?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger">Xóa</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-4 text-center">
            <!-- Pagination ở giữa -->
            <div class="justify-content-center d-flex align-items-center">
                {{ $products->links('pagination::bootstrap-5') }}
            </div>

            <!-- Text hiển thị số lượng -->
            <p class="text-muted small mt-2 mb-0">
                Hiển thị {{ $products->firstItem() }} - {{ $products->lastItem() }} / {{ $products->total() }} sản phẩm
            </p>
        </div>


    </div>
@endsection
