<!-- resources/views/ticket-prices/edit-ticket-price-form.blade.php -->

@extends('layouts.admin')

@section('title', 'Edit Ticket Price')

@section('content')
<style>
   

body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
}

.container2 {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background: #848484e1;
    margin-top: 30px;
}

h1 {
    color: #333;
}

form {
    margin-top: 20px;
}

label {
    display: block;
    margin-bottom: 8px;
}

input {
    width: 100%;
    padding: 10px;
    margin-bottom: 16px;
    box-sizing: border-box;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.bt {
    background-color: #3498db;
    color: #fff;
    border: none;
    padding: 10px 15px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.bt:hover {
    background-color: #2980b9;
}

a {
    display: inline-block;
    margin-top: 20px;
    text-decoration: none;
    color: #3498db;
    transition: color 0.3s;
}

a:hover {
    color: #2980b9;
}

</style>
<div class="container2">
    <h1>Edit Ticket Price</h1>

    <!-- Edit Ticket Price Form -->
    <form method="post" action="{{ route('update.ticket.price', ['id' => $ticketPrice->id]) }}">
        @csrf
        @method('PUT')

        <label for="train_class">Train Class:</label>
        <input type="text" name="train_class" value="{{ $ticketPrice->train_class }}" required>

        <label for="price">Price:</label>
        <input type="number" name="price" step="0.01" value="{{ $ticketPrice->price }}" required>

        <label for="from">From:</label>
        <input type="text" name="from" value="{{ $ticketPrice->from }}" required>

        <label for="to">To:</label>
        <input type="text" name="to" value="{{ $ticketPrice->to }}" required>

        <button class="bt" type="submit">Update Ticket Price</button>
    </form>
</div>
    <a href="{{ route('ticket.prices') }}">Back to Ticket Prices</a>
@endsection
