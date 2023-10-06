@extends('layouts.frontend')
@section('content')
    

<style>
.welcome-box {
    background-color: #0b1630c0;
    
    padding: 20px;
    margin-left: 20%;
    margin-right: 20%;
    margin-bottom: 20%;
    text-align: center;
    margin-top: 150px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); 
}

.welcome-buttons {
    display: flex;
    justify-content: center;
    gap: 20px; 
    margin-top: 20px;
}

.welcome-buttons button {
    padding: 10px 20px;
    background-color: #0b163002;
    border: outset;
    color: #fff; 

  
    border-radius: 8px;
    cursor: pointer;
    font-size: 16px;
    font-weight: bold;
}
.welcome-button1 button:hover{
    background-color: white;
    color: black;

    transition:1s ease-in-out;
    

}
.welcome-button2 button:hover{
    background-color: white;
    color: black;

    transition:1s ease-in-out;
    

}





.welcome-buttons button span {
    margin-left: 10px; 
}
.wel{
    font-size: 30px;
    color: white;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-weight: bold;
}
.para{
    font-size: 20px;
    color: white;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-weight:200;

}.welcome-button1 button{
    width: 180px;
}
.welcome-button2 button{
    width: 160px;
}
</style>
    <!-- Content -->
    <div class="welcome-box">
        <h1 class="wel">Welcome to ShowGo...!</h1>
        <p class="para">Say no for long ques click and buy
            your own  e-ticket from us..!</p>
        
        <!-- Buttons -->
        <div class="welcome-buttons">
            <div class="welcome-button1">
                <button class="reservation" onclick="redirectToSeatReservation()">Seat Reservation <span>&#8594;</span></button>


<script>
    function redirectToSeatReservation() {
        
        window.location.href = "{{ route('seat.reservation') }}";
    }
</script>

            </div>
            <div class="welcome-button2">
                <button onclick="buyETickets()">Buy E-Tickets <span>&#8594;</span></button>
            </div>
            <script>
                function buyETickets() {
                    // Redirect to the E-Ticket page
                    window.location.href = '/e-ticket'; 
                }
            </script>
                        
        </div>
        
    </div>
    @endsection
    