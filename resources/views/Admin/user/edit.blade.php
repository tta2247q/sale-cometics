@extends('Admin.index')
@section('content')
    <a href="javascript:history.back()" class="btn btn-secondary mb-3">
        <i class="bi bi-arrow-left"></i> Quay lại
    </a>
    <h2>Cập nhật người dùng</h2>
    <form action="{{ route('Admin.users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Tên người dùng</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Ảnh người dùng</label>
            <input type="file" class="form-control" id="image" name="image" accept="image/*"
                onchange="previewImage(event)">
            @if ($user->image)
                <div class="mt-2">
                    <img id="preview" src="{{ asset('storage/' . $user->image) }}" style="max-width:150px">
                </div>
            @else
                <div class="mt-2">
                    <img id="preview" src="#" style="max-width:150px; display:none;">
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required></input>
        </div>
        <div class="mb-3">
            <label for="number_phone" class="form-label">phone number</label>
            <input type="text" class="form-control" id="number_phone" name="number_phone" value="{{ $user->number_phone }}" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $user->address }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    @endsection
