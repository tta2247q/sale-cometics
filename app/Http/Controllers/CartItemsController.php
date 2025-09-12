<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;

class CartItemsController extends Controller
{
    public function index()
    {
        $cartItems = CartItem::with('product')
            ->where('user_id', auth()->id())
            ->get();

        $total = $cartItems->sum(fn($item) => $item->price * $item->quantity);

        return view('front-end.pages.cartitems', compact('cartItems', 'total'));
    }
    public function getCartItems()
    {
        $user = auth()->user();
        if (!$user) {
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để xem giỏ hàng');
        }
        $cartItems = $user->cartItems()->with('product')->get();
        return view('front-end.pages.home', compact('cartItems'));
    }

    public function add(Product $product)
    {
        $cartItem = CartItem::where('user_id', auth()->id())
            ->where('product_id', $product->id)
            ->first();

        if ($cartItem) {
            $cartItem->increment('quantity');
        } else {
            CartItem::create([
                'user_id'    => auth()->id(),
                'product_id' => $product->id,
                'quantity'   => 1,
                'price'      => $product->price,
            ]);
        }

        return back()->with('success', 'Sản phẩm đã được thêm vào giỏ!');
    }

    public function remove(CartItem $cartItem)
    {
        $cartItem->delete();
        return back()->with('success', 'Đã xóa sản phẩm khỏi giỏ hàng!');
    }
    public function update(Request $request, CartItem $cartItem)
    {
        // Bỏ authorize đi, tự check user_id nếu cần
        if ($cartItem->user_id !== auth()->id()) {
            abort(403, 'Không có quyền chỉnh sửa giỏ hàng này');
        }

        if ($request->action === 'increase') {
            $cartItem->quantity++;
        } elseif ($request->action === 'decrease' && $cartItem->quantity > 1) {
            $cartItem->quantity--;
        }

        $cartItem->save();

        return redirect()->route('cart.index')->with('success', 'Cập nhật giỏ hàng thành công!');
    }
    public function clear()
    {
        \App\Models\CartItem::where('user_id', auth()->id())->delete();

        return redirect()->route('cart.index')->with('success', 'Đã xoá toàn bộ giỏ hàng!');
    }
}
