<!-- resources/views/admin/add-train-schedule.blade.php -->
@extends('layouts.admin')

@section('title', 'Add Train Schedule')

@section('content')
<style>
    /* Add these styles to your CSS file or in a <style> tag in your HTML */

.ad {
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    color: #333;
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

.addbut button {
    background-color: #3498db;
    color: #fff;
    border: none;
    padding: 10px 15px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.addbut:hover {
    background-color: #2980b9;
}

</style>
<div class="addt">
    <h2>Add Train Schedule</h2>
    <form class="ad" action="{{ route('add.train.schedule') }}" method="post">
        @csrf

        <!-- Add fields like From, To, Time here -->
        <label for="from">From:</label>
        <input type="text" name="from" required>

        <label for="to">To:</label>
        <input type="text" name="to" required>

        <label for="time">Time:</label>
        <input type="time" name="time" required>

        <button class="addbut" type="submit">Add Schedule</button>
    </form>
</div>
@endsection
