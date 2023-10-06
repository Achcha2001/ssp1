

@extends('layouts.frontend')

@section('title', 'Booking Confirmation')

@section('content')
<style>
    .container5 {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-top: 50px;
        margin-bottom: 200px;
        border-radius: 5px;
    }

    h1 {
        color: #333;
    }

    p {
        color: #666;
        margin-bottom: 10px;
    }

   
</style>


<div class="container5">
    <h1>Booking Confirmation</h1>

    <p>Thank you for your booking!</p>
    <p>Total Amount: ${{ $price }}</p>
    <p>Ticket Count: {{ $ticketCount }}</p>

   

</div>

@endsection
