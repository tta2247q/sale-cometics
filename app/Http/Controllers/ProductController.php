<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(12);
        $totalProducts = Product::count();
        return view('Admin.product.index', compact('products', 'totalProducts'));
    }

public function showProducts(Request $request)
{
    $query = Product::query();

    if ($request->has('category') && $request->category) {
        $query->whereHas('categories', function ($q) use ($request) {
    $q->where('categories.id', $request->category);
});
    }

    $products = $query->get();
    $categories = Category::all();

    return view('front-end.pages.product', compact('products', 'categories'));
}
    public function create()
    {
        $categories = Category::all();
        return view('Admin.product.create', compact('categories'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'categories' => 'required|array'
        ]);

        $data = $request->only(['name', 'description', 'price', 'quantity']);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('products', 'public');
            $data['image'] = $path;
        }

        $product = Product::create($data);
        $product->categories()->attach($request->categories);

        return redirect()->route('Admin.products.index')->with('success', 'Product created');
    }
    public function edit(Product $product)
    {
        $categories = Category::all();
        $selectedCategories = $product->categories->pluck('id')->toArray();
        return view('Admin.product.edit', compact('product', 'categories', 'selectedCategories'));
    }
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'categories' => 'required|array'
        ]);
        $data = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('products', 'public');
            $data['image'] = $path;
        }
        $product->update($data);
        $product->categories()->sync($request->categories);
        return redirect()->route('Admin.products.index')->with('success', 'Product updated');
    }
    public function show(Product $product)
    {
        return view('Admin.product.show', compact('product'));
    }
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('Admin.products.index')->with('success', 'Product deleted');
    }
}
