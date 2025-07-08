<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocaleMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Kiểm tra nếu có locale trong session
        if ($request->session()->has('locale')) {
            // Đặt locale từ session
            app()->setLocale($request->session()->get('locale'));
        }
        
        return $next($request);
    }
}