<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $totalCategories = Category::count();
        return view('Admin.categories.index', compact('categories','totalCategories'));
    }
    public function create()
    {
        return view('Admin.categories.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'slug' => 'required|unique:categories,slug,',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $data = $request->only(['name', 'description', 'slug','status', 'image']);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('categories', 'public');
            $data['image'] = $path;
        }
        Category::create($data);
        return redirect()->route('Admin.categories.index')->with('success', 'Category created');
    }
    public function edit(Category $category)
    {
        return view('Admin.categories.edit', compact('category'));
    }
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'slug' => 'required|unique:categories,slug,' . $category->id,
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $data = $request->only(['name','description','slug','status']);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('categories', 'public');
            $data['image'] = $path;
        }
        $category->update($data);
        return redirect()->route('Admin.categories.index')->with('success', 'Category updated');
    }
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('Admin.categories.index')->with('success', 'Category deleted');
    }
    public function show(Category $category)
    {
        return view('Admin.categories.show', compact('category'));
    }
}
