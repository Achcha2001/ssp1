<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeatReservationController extends Controller
{
    public function index()
    {
        // Add any logic you need for the seat reservation page
        return view('seat-reservation'); // Assuming your blade file is named seat-reservation.blade.php
    }
}
