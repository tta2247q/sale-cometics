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

        return view('cart.index', compact('cartItems', 'total'));
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
}
