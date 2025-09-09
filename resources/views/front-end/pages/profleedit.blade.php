{{-- filepath: d:\sales-cosmetic\resources\views\front-end\profleedit.blade.php --}}
@extends('front-end.index')

@section('title', 'Chỉnh sửa thông tin cá nhân')

@section('slot')
<section class="py-5">
    <div class="container">
        <h2 class="mb-4">Chỉnh sửa thông tin cá nhân</h2>
        <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Họ và tên</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $user->name) }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $user->email) }}" required>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Số điện thoại</label>
                <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone', $user->number_phone) }}">
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Địa chỉ</label>
                <textarea name="address" id="address" class="form-control" rows="3">{{ old('address', $user->address) }}</textarea>
            </div>
            
            <div class="mb-3">
                <label for="avatar" class="form-label">Ảnh đại diện</label>
                <input type="file" name="avatar" id="avatar" class="form-control">
                @if ($user->avatar)
                    <img src="{{ asset('storage/' . $user->avatar) }}" alt="Avatar" class="img-thumbnail mt-2" width="150">
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
</section>
@endsection
