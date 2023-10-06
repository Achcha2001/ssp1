<?php
// app/Http/Controllers/SignupController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Passenger;

class PassengerController extends Controller
{
    public function showSignupForm()
    {
        return view('signup');
    }

    public function processSignup(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create a new passenger
        $passenger = Passenger::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // Log the passenger in (optional)
        auth()->login($passenger);

        // Redirect to the home page or any other desired page
        return redirect()->route('afterlogin')->with('success', 'Signup successful!');
    }
}
