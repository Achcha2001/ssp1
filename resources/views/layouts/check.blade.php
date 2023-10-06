<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
         body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('../../images/train2.jpg'); 
            background-size: cover;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
        
            background-color: #0b1630c0;
            padding-right: 20px;
        }

        .navbar-logo img {
            width: auto;
            height: 60px;
        }

        .navbar ul {
            list-style: none;
            display: flex;
            
            padding-top: 30px;
            margin-right: 200PX;
        }

        .navbar li {
            padding: 0;
        }

        .navbar li:hover {
            background: white;
            color: black;
        }

        .navbar a {
            padding-right: 50px;
            padding-left: 36px;
            border-right: 1px solid white;
            text-decoration: none;
            color: white;
            font-weight: 500;
        }

        .linkl a {
            border-right: none;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <div class="navbar-logo">
            <img src="../../images/logo.png" alt="Logo">
        </div>
        <ul>
            <li><a class="link" href="/">Home</a></li>
            <li><a class="link" href="#">Train Schedule</a></li>
            <li><a class="link" href="#">SLR Map</a></li>
        </ul>
            <li id="logout">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </li>
            
        
    </div>
</body>
@yield('content')
</html>
