<?php



namespace App\Http\Controllers;

use App\Models\TicketPrice;
use Illuminate\Http\Request;

class PricecheckController extends Controller
{
    public function index()
    {
        $ticketPrices = TicketPrice::all();
        return view('ticket-price', ['ticketPrices' => $ticketPrices]);
    }

   
}
