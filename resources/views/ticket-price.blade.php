<!-- resources/views/ticket-prices/ticket-price.blade.php -->

@extends('layouts.frontend')

@section('title', 'Ticket Prices')

@section('content')
<style>
    /* Add these styles to your CSS file or within a <style> tag in your HTML */

h1 {
    color: #333;
}

.prtable {
    max-width: 800px;
    margin: 20px auto;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background: rgba(255, 255, 255, 0.879);
}

th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}
.container4{
    margin-top: 50px;
    margin-bottom: 200px;
}
.tp{
    font-size: 40px;
    font-weight: bold;
    background: rgba(198, 196, 196, 0.486);
    margin-right: 800px;
    border-radius: 20px;
    padding: 10px;
    margin-left: 150px;
}

/* Add more styles as needed based on your design preferences */

    </style>
    <div class="container4">
<div class="tp">
    <h1>Ticket Prices</h1>
</div>

    <!-- Ticket Prices Table -->
    <div class="prtable">
    <table border="1">
        <thead>
            <tr>
                
                <th>Train Class</th>
                <th>Price</th>
                <th>From</th>
                <th>To</th>
         
            </tr>
        </thead>
        <tbody>
            @foreach($ticketPrices as $ticketPrice)
                <tr>
                   
                    <td>{{ $ticketPrice->train_class }}</td>
                    <td>{{ $ticketPrice->price }}</td>
                    <td>{{ $ticketPrice->from }}</td>
                    <td>{{ $ticketPrice->to }}</td>
                    
                    
                    
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    </div>
@endsection
