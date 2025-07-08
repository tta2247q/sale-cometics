<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    //
    public function switch(Request $request, $locale)
    {
        // Kiểm tra ngôn ngữ có được hỗ trợ không
        if (!in_array($locale, ['en', 'vi', 'fr', 'ja'])) {
            abort(400);
        }

        // Lưu ngôn ngữ vào session
        $request->session()->put('locale', $locale);

        // Đặt ngôn ngữ hiện tại
        app()->setLocale($locale);

        // Quay trở lại trang trước đó
        return redirect()->back();
    }
}