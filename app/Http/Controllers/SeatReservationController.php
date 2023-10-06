<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeatReservationController extends Controller
{
    public function index()
    {
        
        return view('seat-reservation'); 
    }
}
