

@extends('layouts.frontend')

@section('title', 'Seat Reservation')

@section('content')

<style>
    
    .container6 {
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

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .btn-primary {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        width: 100%;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }
</style>

<div class="container6">
    <h1>Seat Reservation</h1>

    <form id="reservationForm" action="{{ route('reserve.seats') }}" method="post">
        @csrf

        <!-- Select Route -->
        <div class="form-group">
            <label for="route">Select Route:</label>
            <select class="form-control" id="route" name="route">
                <option value="Fort-Kandy">Fort-Kandy</option>
                <option value="Fort-Badulla">Fort-Badulla</option>
                <option value="Fort-Jaffna">Fort-Jaffna</option>
                <option value="Fort-Matara">Fort-Matara</option>
                
            </select>
        </div>

        <!-- Select Train Class -->
        <div class="form-group">
            <label for="trainClass">Select Train Class:</label>
            <select class="form-control" id="trainClass" name="trainClass">
                <option value="first_class">First Class</option>
                <option value="second_class">Second Class</option>
            </select>
        </div>

        <!-- Seat Count -->
        <div class="form-group">
            <label for="seatCount">Number of Seats:</label>
            <input type="number" class="form-control" id="seatCount" name="seatCount" min="1" max="100">
        </div>

        <!-- Date -->
        <div class="form-group">
            <label for="reservationDate">Date:</label>
            <input type="date" class="form-control" id="reservationDate" name="reservationDate">
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Reserve Seats</button>
    </form>
</div>

<script>
   

    document.getElementById('reservationForm').addEventListener('submit', function (event) {
        event.preventDefault();

        // Get form data
        var route = document.getElementById('route').value;
        var trainClass = document.getElementById('trainClass').value;
        var seatCount = document.getElementById('seatCount').value;
        var reservationDate = document.getElementById('reservationDate').value;

        fetch('{{ route('reserve.seats') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
            },
            body: JSON.stringify({
                route: route,
                trainClass: trainClass,
                seatCount: seatCount,
                reservationDate: reservationDate,
            }),
        })
        .then(response => response.json())
        .then(data => {
            
            console.log(data);
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
</script>

@endsection
