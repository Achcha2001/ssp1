<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showForm()
    {
        $contacts = Contact::latest()->get();
        return view('contact', ['contacts' => $contacts]);
    }

    public function submitForm(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Create a new Contact model instance and save the data
        Contact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ]);

        
        return redirect()->route('contact')->with('success', 'Your message has been submitted successfully!');
    }
}
