<!-- filepath: d:\sales-cosmetic\resources\views\front-end\pages\login-register.blade.php -->
@extends('front-end.index')
@section('title', 'Đăng nhập / Đăng ký')
@section('slot')
<section class="login-section d-flex justify-content-center align-items-center vh-100">
    <div class="login-container shadow" style="width: 400px;">
        <ul class="nav nav-tabs mb-3" id="authTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab">Đăng nhập</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" type="button" role="tab">Đăng ký</button>
            </li>
        </ul>
        <div class="tab-content" id="authTabContent">
            <div class="tab-pane fade show active" id="login" role="tabpanel">
                <h2 class="login-title">Đăng nhập</h2>
                @if (session('login_error'))
                    <div class="alert alert-danger py-2">{{ session('login_error') }}</div>
                @endif
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Email:</label>
                        <input type="email" name="email" class="form-control" required autofocus>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mật khẩu:</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-login w-100 mt-2">Đăng nhập</button>
                </form>
            </div>
            <div class="tab-pane fade" id="register" role="tabpanel">
                <h2 class="login-title">Đăng ký</h2>
                @if ($errors->any())
                    <div class="alert alert-danger py-2">
                        @foreach ($errors->all() as $error)
                            <div class="error-message">{{ $error }}</div>
                        @endforeach
                    </div>
                @endif
                <form method="POST" action="{{ route('register.post') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Tên:</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email:</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mật khẩu:</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nhập lại mật khẩu:</label>
                        <input type="password" name="password_confirmation" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-login w-100 mt-2">Đăng ký</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
