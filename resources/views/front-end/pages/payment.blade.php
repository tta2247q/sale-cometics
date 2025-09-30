@extends('front-end.index')
@section('title', 'Thanh toán')
@section('slot')
    <div class="container my-5">
        <h2 class="mb-4 text-center">Thanh toán đơn hàng</h2>

        <div class="row">
            <div class="col-md-6">
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Thông tin khách hàng</h5>
                    </div>
                    <div class="card-body">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Họ và tên</label>
                                <strong>{{ Auth::user()->name }}</strong>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <strong>{{ Auth::user()->email }}</strong>
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Số điện thoại</label>
                                <strong>{{ Auth::user()->number_phone }}</strong>
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label">Địa chỉ giao hàng</label>
                                <strong>{{ Auth::user()->address }}</strong>
                            </div>

                            <div class="mb-3">
                                <label for="payment" class="form-label">Phương thức thanh toán</label>
                                <select class="form-select" id="payment" name="payment_method">
                                    <option value="cod">Thanh toán khi nhận hàng (COD)</option>
                                    <option value="bank">Chuyển khoản ngân hàng</option>
                                    <option value="momo">Thanh toán MoMo</option>
                                </select>
                            </div>
                        <button type="submit" class="btn btn-success w-100">Xác nhận đặt hàng</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-secondary text-white">
                        <h5 class="mb-0">Đơn hàng của bạn</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group mb-3">
                            @foreach ($cartItems as $key => $item)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="my-0">{{ $item->product->name }}</h6>
                                        <small class="text-muted">{{ $item->quantity }}</small>
                                    </div>
                                    <span class="text-muted">{{ number_format($item->product->price, 0, ',', '.') }}
                                        đ</span>
                                </li>
                            @endforeach
                            <li class="list-group-item d-flex justify-content-between">
                                <span><strong>Tổng cộng</strong></span>
                                <strong>{{ number_format($total, 0, ',', '.') }}</strong>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
