@extends('layouts.frontend')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us - ShowGo</title>
    <style>
        

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
            border-radius: 5px;
        }

        h1 {
            color: #333;
        }

        label {
            display: block;
            margin-top: 10px;
            color: #555;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

       .sub {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            width: 100px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .sub:hover {
            background-color: #45a049;
        }

        .success-message {
            color: #008000;
            margin-top: 10px;
        }

        .error-message {
            color: #ff0000;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Contact Us</h1>

        @if(session('success'))
            <div class="success-message">{{ session('success') }}</div>
        @endif

        <!-- Contact Form -->
        <form action="{{ route('contact.submit') }}" method="post">
            @csrf

            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
            @error('name') <span class="error-message">{{ $message }}</span> @enderror

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            @error('email') <span class="error-message">{{ $message }}</span> @enderror

            <label for="message">Message:</label>
            <textarea name="message" id="message" rows="4" required></textarea>
            @error('message') <span class="error-message">{{ $message }}</span> @enderror

            <button class="sub" type="submit">Submit</button>
        </form>

        
       
    </div>
    
</body>
</html>
@endsection
