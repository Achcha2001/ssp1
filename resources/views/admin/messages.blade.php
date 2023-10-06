<!-- resources/views/admin/messages.blade.php -->

@extends('layouts.admin')

@section('title', 'Admin Messages')

@section('content')
<style>
    /* Add these styles to your CSS file */

.container3 {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    margin-bottom: 100px;
}

h1 {
    color: #333;
}

.msgs {
    list-style: none;
    padding: 0;
}

.msgs li {
    margin-bottom: 20px;
    border: 1px solid #ddd;
    padding: 10px;
    border-radius: 5px;
}

.msgs li strong {
    margin-right: 5px;
    color: #333;
}

    </style>
<div class="container3">
    <h1>Admin Messages</h1>

    <ul class="msgs">
        @foreach($contacts as $contact)
            <li>
                <strong>Name:</strong> {{ $contact->name }},
                <strong>Email:</strong> {{ $contact->email }},
                <strong>Message:</strong> {{ $contact->message }}
            </li>
        @endforeach
    </ul>
</div>
@endsection
