<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfirmationController extends Controller
{
    public function show()
    {
        
        $price = session('totalAmount');
        $ticketCount = session('ticketCount');

        return view('confirmation', compact('price', 'ticketCount'));
    }
}
