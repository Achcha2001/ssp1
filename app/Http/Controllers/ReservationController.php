<?php
// app/Http/Controllers/ReservationController.php

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReservationController extends Controller
{
    public function showForm()
    {
        return view('reservation');
    }

    public function reserveSeats(Request $request)
    {
        // Validate the request data
        $request->validate([
            'route' => 'required|string',
            'trainClass' => 'required|string',
            'seatCount' => 'required|integer|min:1|max:100',
            'reservationDate' => 'required|date',
        ]);

        // Save the reservation to the database
        $reservation = new Reservation([
            'route' => $request->input('route'),
            'train_class' => $request->input('trainClass'),
            'seat_count' => $request->input('seatCount'),
            'reservation_date' => $request->input('reservationDate'),
        ]);

        $reservation->save();

        // Update main seat counts in the database (you need to implement this logic)

        // Respond with a success message or redirect
        return response()->json(['message' => 'Seats reserved successfully']);
    }
}
