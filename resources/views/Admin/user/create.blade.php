@extends('Admin.index')

@section('title', 'Thêm người dùng')

@section('content')
    <div class="">
        <a href="javascript:history.back()" class="btn btn-secondary mb-3">
            <i class="bi bi-arrow-left"></i> Quay lại
        </a>
        <h2>Thêm người dùng</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('Admin.users.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Tên người dùng</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Ảnh người dùng</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*"
                    onchange="previewImage(event)">
                <img id="preview" src="#" alt="Ảnh demo" style="display:none; max-width:200px; margin-top:10px;" />
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Địa chỉ Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="number_phone" class="form-label">Số điện thoại</label>
                <input type="text" class="form-control" id="number_phone" name="number_phone" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Địa chỉ</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mật khẩu</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Quyền người dùng</label>
                <select class="form-select" id="role" name="role" required>
                    <option value="">-- Chọn quyền --</option>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Thêm</button>
        </form>
    </div>
@endsection
