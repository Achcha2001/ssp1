@extends('layouts.frontend')



@section('content')
<style>
   

.container {
    background: rgba(2, 8, 48, 0.721);
    color: white;
    margin-left: 300px ;
    margin-bottom: 30px;
    margin-top: 30px;
    width: 500px;
    margin-right: 50px;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.signup-container h2 {
    text-align: center;
    color: #333; 
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    color: #ffffff; 
}

.form-group input {
    width: 100%;
    padding: 4px;
    color: black;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.sup {
    background-color: #007bff; 
    color: #fff;
    margin-left: 70px;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    width: 60%;
}

.sup:hover {
    background-color: #0056b3; 
}

</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Sign Up</title>
</head>
<body>

<div class="container">
    <form id="signupForm" action="{{ route('signup.process') }}" method="post">
        @csrf
        <h2>Sign Up</h2>

        <!-- Name -->
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <!-- Email -->
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <!-- Password -->
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>

        <!-- Confirm Password -->
        <div class="form-group">
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>

        <button class="sup" type="submit">SignUp</button>
    </form>
</div>

{{-- <script src="script.js"></script>  --}}
</body>
</html>
@endsection