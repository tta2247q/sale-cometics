@extends('Admin.index')

@section('title', 'Thêm danh mục')

@section('content')
<div class="container mt-4">
    <h2>Thêm danh mục</h2>

    {{-- Hiển thị lỗi validate --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('Admin.categories.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="name">Tên danh mục</label>
            <input type="text" name="name" class="form-control" placeholder="Nhập tên danh mục"
                   value="{{ old('name') }}">
        </div>

        <div class="mb-3">
            <label for="slug">Slug</label>
            <input type="text" name="slug" class="form-control" placeholder="ví dụ: trai-cay"
                   value="{{ old('slug') }}">
        </div>

        <div class="mb-3">
            <label for="description">Mô tả</label>
            <textarea name="description" class="form-control" placeholder="Nhập mô tả">{{ old('description') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="image">Ảnh</label>
            <input type="file" name="image" class="form-control">
        </div>

        {{-- Nếu migration có cột status thì giữ lại, không thì bỏ đi --}}
        @if (Schema::hasColumn('categories', 'status'))
            <div class="mb-3">
                <label for="status">Trạng thái</label>
                <select name="status" class="form-control">
                    <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Hoạt động</option>
                    <option value="hidden" {{ old('status') == 'hidden' ? 'selected' : '' }}>Ẩn</option>
                </select>
            </div>
        @endif

        <button type="submit" class="btn btn-success">Lưu</button>
        <a href="{{ route('Admin.categories.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection
