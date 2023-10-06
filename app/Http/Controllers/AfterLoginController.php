<?php
// app/Http/Controllers/AfterLoginController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AfterLoginController extends Controller
{
    public function index()
    {
        return view('layouts.afterlogin'); // Adjust the path based on your actual folder structure
    }
}

