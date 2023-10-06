@extends('layouts.frontend')



@section('content')

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-image: url('../../images/train2.jpg');
        background-size: cover;
    }

    h2 {
        color: #333;
    }

    .alert {
        padding: 10px;
        margin: 10px 0;
        background-color: #dff0d8;
        border: 1px solid #3c763d;
        color: #3c763d;
        border-radius: 4px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        background: white;
        overflow: auto; 
    }

    table, th, td {
        border: 1px solid #ddd;
    }

    th, td {
        padding: 15px;
        text-align: left;
    }

    th {
        background-color: #333;
        color: white;
    }

    .edit-btn,
    .delete-btn {
        display: inline-block;
        padding: 5px 10px;
        margin-right: 5px;
        text-decoration: none;
        color: #fff;
        border-radius: 3px;
    }

    .edit-btn {
        background-color: #337ab7;
    }

    .delete-btn {
        background-color: #d9534f;
    }
</style>

<h2>Train Schedule</h2>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table>
    <thead>
        <tr>
            <th>From</th>
            <th>To</th>
            <th>Time</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach($trainSchedules as $schedule)
            <tr>
                <td>{{ $schedule->from }}</td>
                <td>{{ $schedule->to }}</td>
                <td>{{ $schedule->time }}</td>
               
            </tr>
        @endforeach
    </tbody>
</table>
@endsection