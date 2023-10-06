<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EticketController extends Controller
{
    public function showEticketPage()
    {
        return view('e-ticket'); 
    }
}
