<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('Admin.product.index', compact('products'));
    }
    public function create()
    {
        return view('Admin.product.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|integer'
        ]);
        Product::create($request->all());
        return redirect()->route('Admin.products.index')->with('success', 'Product created');
    }
    public function edit(Product $product)
    {
        return view('Admin.product.edit', compact('product'));
    }
    public function update(request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|integer'
        ]);
        $product->update($request->all());
        return redirect()->route('Admin.products.index')->with('success', 'Product updated');
    }
    public function show(Product $product)
    {
        return view('Admin.product.show', compact('product'));
    }
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('Admin.products.index')->with('success', 'Product updated');
    }
}
