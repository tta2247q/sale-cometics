<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Product;
class BlogController extends Controller
{
    public function index(){
        $blogs =Blog::all();
        return view('Admin.blog.index',compact('blogs'));
    }

    public function create(){
        return view('Admin.blog.create');
    }
    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'images' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'author' => 'required',
            'status' => 'required',
        ]);
        $data = $request->only(['title','description','images','author','status']);
        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $path = $file->store('blogs', 'public');
            $data['images'] = $path;
        }
        Blog::create($data);
        return redirect()->route('blog.index')->with('success', 'Blog created');
    }
    public function edit(Blog $blog){
        return view('Admin.blog.edit',compact('blog'));
    }
    public function update(Request $request,Blog $blog){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'images' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'author' => 'required',
            'status' => 'required',
        ]);
        $data = $request->only(['title','description','images','author','status']);
        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $path = $file->store('blogs', 'public');
            $data['images'] = $path;
        }
        $blog->update($data);
        return redirect()->route('blog.index')->with('success', 'Blog updated');
    }
    public function destroy(Blog $blog){
        $blog->delete();
        return redirect()->route('blog.index')->with('success', 'Blog deleted');
    }
    public function show(Blog $blog){
        return view('Admin.blog.show',compact('blog'));
    }
    public function showhome(){
        $blogs = Blog::all();
        $product = Product::all();
        return view('front-end.pages.Home',compact('blogs','product'));
    }
}
