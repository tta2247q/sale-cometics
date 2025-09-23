@extends('front-end.index')
@section('title', 'Đăng nhập')
@section('slot')
    <section class="login-section d-flex justify-content-center align-items-center vh-100 bg-light">
        <div class="login-container shadow-lg bg-white rounded p-4" style="width: 420px;">
            <h3 class="text-center mb-3 text-primary">Đăng nhập</h3>
            @if (session('login_error'))
                <div class="alert alert-danger py-2 text-center">{{ session('login_error') }}</div>
            @endif
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label fw-semibold">Email:</label>
                    <input type="email" name="email" class="form-control" placeholder="Nhập email của bạn"
                        required autofocus>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Mật khẩu:</label>
                    <input type="password" name="password" class="form-control" placeholder="Nhập mật khẩu"
                        required>
                </div>
                <button type="submit" class="btn btn-primary w-100 mt-2">Đăng nhập</button>
            </form>
            <div class="text-center mt-3">
                <a href="{{ route('register') }}">Chưa có tài khoản? Đăng ký ngay</a>
            </div>
        </div>
    </section>
@endsection
