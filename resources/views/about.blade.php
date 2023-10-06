@extends('layouts.frontend')

@section('content')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About ShowGo</title>
    <style>
        

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;

            border-radius: 10px;
            background-color: #ffffffb4; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 

        h1 {
            color: #007bff; 

        p {
            font-size: 1.2em; 
            color: #555; 
        }

        .key-features {
            margin-top: 20px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 8px;
        }

        a {
            color: #007bff; 
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>About ShowGo</h1>
        <p>
            ShowGo is a revolutionary platform that allows you to easily reserve train seats and purchase electronic tickets for a hassle-free travel experience.
        </p>
        <p>
            Our mission is to make train travel convenient, comfortable, and enjoyable. With ShowGo, you can plan your journey, select your preferred seats, and get your e-tickets with just a few clicks.
        </p>
        <div class="key-features">
            <h2>Key Features:</h2>
            <ul>
                <li>Effortless Seat Reservation: Choose your seats with ease.</li>
                <li>Electronic Tickets: No more paper tickets. Your e-ticket is all you need.</li>
                <li>User-Friendly Interface: Navigate and use the platform with simplicity.</li>
               
            </ul>
        </div>
        <p>
            Whether you're a frequent traveler or planning a one-time trip, ShowGo is here to enhance your train travel experience.
        </p>
        <p>
            Ready to get started? <a href="{{ route('register') }}">Sign up</a> today!
        </p>
    </div>
</body>
</html>

@endsection