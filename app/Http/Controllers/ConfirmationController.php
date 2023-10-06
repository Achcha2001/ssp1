<?php

// app/Http/Controllers/ConfirmationController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfirmationController extends Controller
{
    public function show()
    {
        // You can retrieve necessary data (price, ticket count) from the session or database
        $price = session('totalAmount');
        $ticketCount = session('ticketCount');

        return view('confirmation', compact('price', 'ticketCount'));
    }
}
