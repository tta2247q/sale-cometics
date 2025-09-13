<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactControllerController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string',
        ]);


        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
