<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Here you can handle the validated data, e.g., send an email or store it in the database.

        return redirect()->back()->with('success', 'Thank you for your message! We will get back to you soon.');
    }
}
