<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);
        $data = $request->all();
        $contact = Contact::create($data);
        return redirect()->route('home')->with('success', 'Your message has been sent successfully!');
    }
}
