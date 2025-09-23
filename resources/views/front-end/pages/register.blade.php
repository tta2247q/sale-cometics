@extends('front-end.index')
@section('title', 'Đăng ký')
@section('slot')
    <section class="register-section d-flex justify-content-center align-items-center vh-100 bg-light">
        <div class="register-container shadow-lg bg-white rounded p-4" style="width: 420px;">
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
                    <label class="form-label fw-semibold">Nhập lại mật khẩu: </label>
                    <input type="password" name="password_confirmation" class="form-control"
                        placeholder="Xác nhận mật khẩu" required>
                </div>
                <button type="submit" class="btn btn-success w-100 mt-2">Đăng ký</button>
            </form>
            <div class="text-center mt-3">
                <a href="{{ route('login') }}">Đã có tài khoản? Đăng nhập</a>
            </div>
        </div>
    </section>
@endsection
