{{-- filepath: d:\sales-cosmetic\resources\views\Admin\product\create.blade.php --}}
@extends('Admin.index')

@section('title', 'Thêm sản phẩm')

@section('content')
    <div class=" mt-4">
        <a href="javascript:history.back()" class="btn btn-secondary mb-3">
            <i class="bi bi-arrow-left"></i> Quay lại
        </a>
        <h2>Thêm sản phẩm</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('Admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Tên sản phẩm</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Ảnh sản phẩm</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*"
                    onchange="previewImage(event)">
                <img id="preview" src="#" alt="Ảnh demo" style="display:none; max-width:200px; margin-top:10px;" />
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Mô tả</label>
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Giá</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Số lượng</label>
                <input type="number" class="form-control" id="quantity" name="quantity" required>
            </div>
            <button type="submit" class="btn btn-primary">Thêm</button>
        </form>
    </div>
@endsection
