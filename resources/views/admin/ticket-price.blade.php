<!-- resources/views/ticket-prices/ticket-prices.blade.php -->

@extends('layouts.admin')

@section('title', 'Ticket Prices')

@section('content')
<style>
/* Add these styles to your CSS file or in a <style> tag in your HTML */

 

.container1 {
background: #333333d8;
color: white;
width: 800px;
margin-left: 200px;
padding-bottom: 20px;
}

h1, h2 {
    color: #333;
}

.warning {
    background-color: #ff0d08;
    padding: 5px;
    margin-bottom: 20px;
}

form {
    max-width: 600px;
    margin-bottom: 20px;
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

.button {
    background-color: #3498db;
    color: #fff;
    border: none;
    padding: 10px 15px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.button:hover {
    background-color: #2980b9;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background: rgba(255, 255, 255, 0.845);
}

th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}
.fr{
    margin-left: 50px;
}

    </style>
<div class="container1">
    <h1>Ticket Prices</h1>

    <!-- Add Ticket Price Form -->
    <div>
        <h2>Add Ticket Price</h2>
        <div class="warning">
            <h3>Please use "first class," "second class," "third class" to fill out the Train Class field.</h3>
        </div>
        <form method="post" action="{{ route('add.ticket.price') }}">
            @csrf
            <div class="fr">
            <label for="train_class">Train Class:</label>
            <input type="text" name="train_class" required>

            <label for="price">Price:</label>
            <input type="number" name="price" step="0.01" required>

            <label for="from">From:</label>
            <input type="text" name="from" required>

            <label for="to">To:</label>
            <input type="text" name="to" required>

            <button class="button" type="submit">Add Ticket Price</button>
            </div>
        </form>
    </div>
</div>
    <!-- Ticket Prices Table -->
    <div>
        <h2>Existing Ticket Prices</h2>
        @if (session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif

        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Train Class</th>
                    <th>Price</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ticketPrices as $ticketPrice)
                    <tr>
                        <td>{{ $ticketPrice->id }}</td>
                        <td>{{ $ticketPrice->train_class }}</td>
                        <td>{{ $ticketPrice->price }}</td>
                        <td>{{ $ticketPrice->from }}</td>
                        <td>{{ $ticketPrice->to }}</td>
                        <td>
                            <a href="{{ route('edit.ticket.price.form', ['id' => $ticketPrice->id]) }}">Edit</a>
                            |
                            <form method="post" action="{{ route('delete.ticket.price', ['id' => $ticketPrice->id]) }}" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
