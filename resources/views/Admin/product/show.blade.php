@extends('Admin.index')
@section('content')
    <a href="javascript:history.back()" class="btn btn-secondary mb-3">
        <i class="bi bi-arrow-left"></i> Quay lại
    </a>
    <h2>Chi tiết sản phẩm</h2>
    <form>
        <div class="row mb-3">
            <div class="col-md-2">
                <label for="productId" class="form-label">ID</label>
                <input type="text" class="form-control" id="productId" value="{{ $product->id }}" readonly>
            </div>
            <div class="col-md-10">
                <label for="productName" class="form-label">Tên sản phẩm</label>
                <input type="text" class="form-control" id="productName" value="{{ $product->name }}" readonly>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Ảnh sản phẩm</label><br>

            @if ($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" style="max-width:150px">
            @endif
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="productPrice" class="form-label">Giá</label>
                <input type="number" class="form-control" id="productPrice" value="{{ $product->price }}" readonly>
            </div>
            <div class="col-md-6">
                <label for="productQuantity" class="form-label">Số lượng</label>
                <input type="number" class="form-control" id="productQuantity" value="{{ $product->quantity }}" readonly>
            </div>
        </div>

        <div class="mb-3">
            <label for="productDescription" class="form-label">Mô tả</label>
            <textarea class="form-control" id="productDescription" rows="4" readonly>{{ $product->description }}</textarea>
        </div>
    </form>
@endsection
