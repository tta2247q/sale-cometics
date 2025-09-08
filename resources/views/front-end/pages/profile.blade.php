@extends('front-end.index') {{-- layout chính của mày --}}

@section('title', 'Trang cá nhân')

@section('slot')
    <div class="container py-5">
        <div class="row">
            <!-- Cột trái: avatar + info -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body text-center">
                        <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="Avatar"
                            class="rounded-circle mb-3 shadow" width="150" height="150" style="object-fit: cover;">
                        <h5 class="card-title mb-0">{{ Auth::user()->name }}</h5>
                        <p class="text-muted mb-1">{{ Auth::user()->email }}</p>
                        <p class="text-muted small">Thành viên từ: {{ Auth::user()->created_at->format('d/m/Y') }}</p>

                        <a href="{{ route('users.edit', Auth::user()->id) }}"
                            class="btn btn-primary btn-sm mt-2">Chỉnh sửa hồ sơ</a>
                    </div>
                </div>
            </div>

            <!-- Cột phải: thông tin chi tiết -->
            <div class="col-md-8">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-header bg-primary text-white">
                        <h6 class="mb-0">Thông tin cá nhân</h6>
                    </div>
                    <div class="card-body">
                        <p><strong>Họ và tên:</strong> {{ Auth::user()->name }}</p>
                        <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                        <p><strong>Số điện thoại:</strong> {{ Auth::user()->number_phone ?? 'Chưa cập nhật' }}</p>
                        <p><strong>Địa chỉ:</strong> {{ Auth::user()->address ?? 'Chưa cập nhật' }}</p>
                    </div>
                </div>

                <div class="card shadow-sm border-0">
                    <div class="card-header bg-secondary text-white">
                        <h6 class="mb-0">Cài đặt tài khoản</h6>
                    </div>
                    <div class="card-body">
                        <a href="#" class="btn btn-outline-primary btn-sm">Đổi mật khẩu</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
