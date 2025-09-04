<!-- filepath: d:\sales-cosmetic\resources\views\front-end\pages\login-register.blade.php -->
@extends('front-end.index')
@section('title', 'Đăng nhập / Đăng ký')
@section('slot')
    <section class="login-section d-flex justify-content-center align-items-center vh-100 bg-light">
        <div class="login-container shadow-lg bg-white rounded p-4" style="width: 420px;">
            <ul class="nav nav-tabs mb-4" id="authTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active text-primary fw-bold" id="login-tab" data-bs-toggle="tab"
                        data-bs-target="#login" type="button" role="tab">
                        Đăng nhập
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-primary fw-bold" id="register-tab" data-bs-toggle="tab"
                        data-bs-target="#register" type="button" role="tab">
                        Đăng ký
                    </button>
                </li>
            </ul>

            <div class="tab-content" id="authTabContent">
                <div class="tab-pane fade show active" id="login" role="tabpanel">
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
                </div>

                <div class="tab-pane fade" id="register" role="tabpanel">
                    <h3 class="text-center mb-3 text-success">Đăng ký</h3>
                    @if ($errors->any())
                        <div class="alert alert-danger py-2">
                            @foreach ($errors->all() as $error)
                                <div class="error-message small">{{ $error }}</div>
                            @endforeach
                        </div>
                    @endif
                    <form method="POST" action="{{ route('register.post') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Tên:</label>
                            <input type="text" name="name" class="form-control" placeholder="Nhập tên của bạn"
                                required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Email:</label>
                            <input type="email" name="email" class="form-control" placeholder="Nhập email của bạn"
                                required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Mật khẩu:</label>
                            <input type="password" name="password" class="form-control" placeholder="Tạo mật khẩu" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Nhập lại mật khẩu:</label>
                            <input type="password" name="password_confirmation" class="form-control"
                                placeholder="Xác nhận mật khẩu" required>
                        </div>
                        <button type="submit" class="btn btn-success w-100 mt-2">Đăng ký</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
