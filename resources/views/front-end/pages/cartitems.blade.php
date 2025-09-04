@extends('front-end.index')
@section('title', 'Cart Items')
@section('slot')

    <div class="container my-5">
        <h2 class="mb-4">🛒 Giỏ hàng của bạn</h2>

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
                            <td>{{ $item->product->name }}</td>
                            <td>{{ number_format($item->price, 0, ',', '.') }} đ</td>
                            <td>{{ $item->quantity }}</td>
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

            <div class="text-end">
                <button class="btn btn-primary">Thanh toán</button>
            </div>
        @else
            <p>🚫 Giỏ hàng trống.</p>
        @endif
    </div>

@endsection
