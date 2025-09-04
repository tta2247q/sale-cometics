@extends('front-end.index')

@section('title', 'Danh sách sản phẩm')

@section('slot')
<div class="container mt-4">
    <h1 class="mb-4">Danh sách sản phẩm</h1>

    <div class="row">
        @foreach($products as $product)
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm">
                    {{-- Hình ảnh sản phẩm --}}
                    <img src="{{ $product->image ?? 'https://via.placeholder.com/200' }}" 
                         class="card-img-top" 
                         alt="{{ $product->name }}">

                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text text-muted">{{ number_format($product->price, 0, ',', '.') }} đ</p>

                        {{-- Form thêm vào giỏ --}}
                        <form action="{{ route('cart.add', $product->id) }}" method="POST" class="mt-auto">
                            @csrf
                            <button type="submit" class="btn btn-primary w-100">
                                🛒 Thêm vào giỏ
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
