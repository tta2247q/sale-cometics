<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function contact()
    {
        return view('front-end.pages.contact');
    }
    public function news()
    {
        return view('front-end.pages.news');
    }
    public function profile()
    {
        return view('front-end.pages.profile');
    }
    
}
