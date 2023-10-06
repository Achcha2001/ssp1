<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TicketPrice;

class TicketPriceController extends Controller
{
    public function showTicketPrices()
    {
        $ticketPrices = TicketPrice::all();
        return view('admin.ticket-price', ['ticketPrices' => $ticketPrices]);
    }

    public function addTicketPriceForm()
    {
        return view('ticket-prices.add-ticket-price-form');
    }

    public function addTicketPrice(Request $request)
    {
        $validatedData = $request->validate([
            'train_class' => 'required|string|max:255',
            'price' => 'required|numeric',
            'from' => 'required|string|max:255',
            'to' => 'required|string|max:255',
        ]);

        TicketPrice::create($validatedData);

        return redirect()->route('add.ticket.prices')->with('success', 'Ticket price added successfully');
    }

    public function editTicketPriceForm($id)
    {
        $ticketPrice = TicketPrice::findOrFail($id);
        return view('admin.edit-ticket-price', ['ticketPrice' => $ticketPrice]);
    }

    public function updateTicketPrice(Request $request, $id)
    {
        $validatedData = $request->validate([
            'train_class' => 'required|string|max:255',
            'price' => 'required|numeric',
            'from' => 'required|string|max:255',
            'to' => 'required|string|max:255',
        ]);

        $ticketPrice = TicketPrice::findOrFail($id);
        $ticketPrice->update($validatedData);

        return redirect()->route('ticket.prices')->with('success', 'Ticket price updated successfully');
    }

    public function deleteTicketPrice($id)
    {
        $ticketPrice = TicketPrice::findOrFail($id);
        $ticketPrice->delete();

        return redirect()->route('ticket.prices')->with('success', 'Ticket price deleted successfully');
    }
}
