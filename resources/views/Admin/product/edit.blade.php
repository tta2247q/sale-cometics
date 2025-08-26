@extends('Admin.index')
@section('content')
    <a href="javascript:history.back()" class="btn btn-secondary mb-3">
        <i class="bi bi-arrow-left"></i> Quay lại
    </a>
    <h2>Cập nhật sản phẩm</h2>
    <form action="{{ route('Admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Tên sản phẩm</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Ảnh sản phẩm</label>
            <input type="file" class="form-control" id="image" name="image" accept="image/*"
                onchange="previewImage(event)">
            @if ($product->image)
                <div class="mt-2">
                    <img id="preview" src="{{ asset('storage/' . $product->image) }}" style="max-width:150px">
                </div>
            @else
                <div class="mt-2">
                    <img id="preview" src="#" style="max-width:150px; display:none;">
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Mô tả</label>
            <textarea class="form-control" id="description" name="description" required>{{ $product->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Giá</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}" required>
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Số lượng</label>
            <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $product->quantity }}"
                required>
        </div>
        <div class="mb-3">
            <label for="categories" class="form-label">Danh mục</label>
            <select name="categories[]" id="categories" class="form-control" multiple required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}"
                        {{ in_array($category->id, $product->categories->pluck('id')->toArray()) ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            <small>Giữ Ctrl (Windows) hoặc Command (Mac) để chọn nhiều</small>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    @endsection
