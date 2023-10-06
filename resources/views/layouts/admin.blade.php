<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Portal')</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('../../images/train2.jpg'); 
            background-size: cover;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        nav {
            background-color: #333;
            overflow: hidden;
        }

        .navbar-logo {
            float: left;
            padding: 15px;
        }

        .navbar-logo img {
            max-height: 50px; /* Set your preferred height */
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        nav li {
            float: left;
        }

        nav a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        nav a:hover {
            background-color: #ddd;
            color: black;
        }

        nav #logout {
            float: right;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 20px 0;
            text-align: center;
            
            bottom: 0;
            height: 80px;
            width: 100%;
        }

        .footer-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer-links {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        .footer-links li {
            margin-right: 20px;
        }

        .footer-links a {
            color: white;
            text-decoration: none;
        }
        .footer-logo img{
            height: 80px;
            width: 80px;
        }
    </style>
</head>
<body>
    <div class="container">
        <nav>
            <div class="navbar-logo">
                <img src="../../images/logo.png" alt="Logo"> <!-- Set your logo image path -->
            </div>
            <ul>
                <li><a href="{{ route('dashboard') }}">Home</a></li>
                <li><a href="{{ route('admin.messages') }}">Messages</a></li>

                <li><a href="{{ route('train.schedule') }}">Train Schedule</a></li>
                <li><a href="#">Edit Profile</a></li>
                <li id="logout">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>
            </ul>
        </nav>
    </div>
    @yield('content')
    <br>
    <br>

    <footer>
        <div class="footer-info">
            <div class="footer-logo">
                <img src="../../images/logo.png" alt="Logo"> 
            </div>
            <p>&copy; 2023 ShowGo. All rights reserved.</p>
            <ul class="footer-links">
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms of Service</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>
