<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('guest.contact');
    }

    public function store(Request $request)
    {
        // Validate and store the form data in the database
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        Contact::create($validatedData);
        return response()->json(['success' => 'Form submitted successfully']);
    }
}
