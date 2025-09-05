@extends('front-end.index')

@section('title', 'Danh sách sản phẩm')

@section('slot')
    <section class="py-4 border-bottom">
        <div class="container">
            <div class="row g-3 align-items-center">
                <div class="col-md-3">
                    <select class="form-select">
                        <option selected>All Categories</option>
                        <option>Fruits</option>
                        <option>Vegetables</option>
                        <option>Drinks</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option selected>Sort by</option>
                        <option>Price: Low to High</option>
                        <option>Price: High to Low</option>
                        <option>Newest</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search products...">
                        <button class="btn btn-success"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Grid -->
    <section class="py-5">
    <div class="container">
        <div class="row g-4">
            @foreach ($products as $product)
                <div class="col-md-3">
                    <div class="card product-card shadow-sm h-100">
                        <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="price">{{ number_format($product->price, 0, ',', '.') }}đ</p>
                            <div class="mt-auto d-flex justify-content-between">
                                <form action="{{ route('cart.add', $product->id) }}" method="POST">
                                    @csrf
                                    <button class="btn btn-success btn-sm">
                                        <i class="bi bi-basket"></i> Add
                                    </button>
                                </form>
                                <button class="btn btn-outline-danger btn-sm">
                                    <i class="bi bi-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
