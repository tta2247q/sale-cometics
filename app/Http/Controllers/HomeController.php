<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Contact;

class HomeController extends Controller
{
    public function contact()
    {
        return view('front-end.pages.contact');
    }
    public function news()
    {
        $blogs = Blog::latest()->take(5)->get();
        return view('front-end.pages.news', compact('blogs'));
    }
    public function profile()
    {
        return view('front-end.pages.profile');
    }
    public function home()
    {
        $products = Product::latest()->take(10)->get();
        $blogs = Blog::latest()->take(5)->get();
        $categories = Category::all();
        $contacts = Contact::all();
        return view('front-end.pages.Home', compact('products', 'blogs', 'categories'));
    }
}
