<!-- resources/views/frontend.blade.php -->

@extends('layouts.frontend')

@section('content')

<style>
    /* Add your form and other styles here */

    .container {
        max-width: 600px;
        margin: 20px auto;
        background: #fff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
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
        width: 200px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }
</style>

<div class="container">
    <h1>E-Ticket Booking</h1>

    <form id="eTicketForm">
        <div class="form-group">
            <label for="from">From:</label>
            <select class="form-control" id="from" name="from">
                <!-- Add your options for 'from' here -->
                <option value="Colombo Fort">Colombo Fort</option>
                <option value="Maradana">Maradana</option>
                <option value="Ragama">Ragama</option>
                <option value="Gampaha">Gampaha</option>
                <option value="Veyangoda">Veyangoda</option>
                <option value="Mirigama">Mirigama</option>
                <option value="Polgahawela">Polgahawela</option>
                <option value="Rambukkana">Rambukkana</option>
                <option value="Ambepussa">Ambepussa</option>
                <option value="Kadigamuwa">Kadigamuwa</option>
                <option value="Polgahawela Junction">Polgahawela Junction</option>
                <option value="Ihalakotte">Ihalakotte</option>
                <option value="Gelioya">Gelioya</option>
                <option value="Katugastota">Katugastota</option>
                <option value="Kandy">Kandy</option>
            </select>
        </div>

        <div class="form-group">
            <label for="to">To:</label>
            <select class="form-control" id="to" name="to">
                <!-- Add your options for 'to' here -->
                <option value="Colombo Fort">Colombo Fort</option>
                <option value="Maradana">Maradana</option>
                <option value="Ragama">Ragama</option>
                <option value="Gampaha">Gampaha</option>
                <option value="Veyangoda">Veyangoda</option>
                <option value="Mirigama">Mirigama</option>
                <option value="Polgahawela">Polgahawela</option>
                <option value="Rambukkana">Rambukkana</option>
                <option value="Ambepussa">Ambepussa</option>
                <option value="Kadigamuwa">Kadigamuwa</option>
                <option value="Polgahawela Junction">Polgahawela Junction</option>
                <option value="Ihalakotte">Ihalakotte</option>
                <option value="Gelioya">Gelioya</option>
                <option value="Katugastota">Katugastota</option>
                <option value="Kandy">Kandy</option>
            </select>
        </div>

        <div class="form-group">
            <label for="ticketCount">Ticket Count:</label>
            <input type="number" class="form-control" id="ticketCount" name="ticketCount" min="1" value="1">
        </div>

        <div class="form-group">
            <label for="totalAmount">Total Amount:</label>
            <input type="text" class="form-control" id="totalAmount" name="totalAmount" readonly>
        </div>

        <button type="button" class="btn btn-primary" onclick="calculateTotal()">Calculate Total</button>
        <button type="button" class="btn btn-primary" onclick="proceedToPayment()">Proceed to Payment</button>
    </form>
</div>

<script>
    function calculateTotal() {
        var ticketCount = parseInt(document.getElementById('ticketCount').value);
        var from = document.getElementById('from').value;
        var to = document.getElementById('to').value;

        // Assume base price is $10 and increments by $10 for each different selection
        var basePrice = 10;
        var priceIncrement = 10;

        // Calculate the total amount
        var totalAmount = basePrice + (getDistance(from, to) + priceIncrement) * ticketCount;

        // Display the total amount
        document.getElementById('totalAmount').value = 'Lkr' + totalAmount.toFixed(2);
    }

    function getDistance(from, to) {
        // You need to implement your logic to calculate the distance
        // For demonstration, let's assume a simple mapping
        var distanceMap = {
            'Colombo Fort': 0,
            'Maradana': 10,
            'Ragama': 20,
            'Gampaha': 40,
            // ... Add more mappings as needed
        };

        return Math.abs(distanceMap[to] - distanceMap[from]);
    }

    function proceedToPayment() {
    // Assume you have calculated the total amount and stored it in a session
    var totalAmount = parseFloat(document.getElementById('totalAmount').value);
    var ticketCount = parseInt(document.getElementById('ticketCount').value);

    // Store data in session
    sessionStorage.setItem('totalAmount', totalAmount);
    sessionStorage.setItem('ticketCount', ticketCount);

    // Redirect to the confirmation page
    window.location.href = "{{ route('confirmation.show') }}";
}
</script>

@endsection
