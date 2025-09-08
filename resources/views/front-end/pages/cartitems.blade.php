@extends('front-end.index')
@section('title', 'Cart Items')
@section('slot')

<div class="container my-5">
    <h2 class="mb-4">🛒 Giỏ hàng của bạn</h2>

    {{-- Flash message --}}
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($cartItems->count())
        <table class="table table-bordered align-middle">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cartItems as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('storage/' . $item->product->image) }}"
                                     alt="{{ $item->product->name }}"
                                     class="rounded me-2" width="50" height="50" style="object-fit: cover;">
                                {{ $item->product->name }}
                            </div>
                        </td>
                        <td>{{ number_format($item->price, 0, ',', '.') }} đ</td>
                        <td>
                            <form action="{{ route('cart.update', $item->id) }}" method="POST" class="d-inline">
                                @csrf
                                <div class="input-group input-group-sm" style="width: 120px;">
                                    <button type="submit" name="action" value="decrease" class="btn btn-outline-secondary">
                                        <i class="bi bi-dash"></i>
                                    </button>
                                    <input type="text" class="form-control text-center" value="{{ $item->quantity }}" readonly>
                                    <button type="submit" name="action" value="increase" class="btn btn-outline-secondary">
                                        <i class="bi bi-plus"></i>
                                    </button>
                                </div>
                            </form>
                        </td>
                        <td>{{ number_format($item->price * $item->quantity, 0, ',', '.') }} đ</td>
                        <td>
                            <form action="{{ route('cart.remove', $item->id) }}" method="POST"
                                  onsubmit="return confirm('Xoá sản phẩm này?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Xoá</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="4" class="text-end"><strong>Tổng cộng:</strong></td>
                    <td colspan="2"><strong>{{ number_format($total, 0, ',', '.') }} đ</strong></td>
                </tr>
            </tbody>
        </table>

        <div class="d-flex justify-content-between mt-3">
            <form action="{{ route('cart.clear') }}" method="POST"
                  onsubmit="return confirm('Xoá toàn bộ giỏ hàng?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline-danger btn-sm">🗑 Xoá tất cả</button>
            </form>

            <button class="btn btn-primary">Thanh toán</button>
        </div>
    @else
        <p>🚫 Giỏ hàng trống.</p>
    @endif
</div>

@endsection
