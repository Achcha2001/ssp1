
@extends('layouts.check')

@section('content')
<style>
   

    .checker-content {
        max-width: 600px;
        margin-top: 150px;
        background: rgba(255, 255, 255, 0.84);
        margin-left: 280px;
        margin-right: 50px;
        border-radius: 20px;
        text-align: center;
        padding: 20px;
    }

    .checker-content h2 {
        color: #333;
    }

    .checker-content p {
        color: #666;
    }

    .scanning-icon {
        width: 100px;
        height: auto;
        margin-top: 20px;
        cursor: pointer; 
    }

    
    #qrScannerModal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
    }

    #qrScannerModal video {
        width: 100%;
        height: auto;
    }
    footer {
            background-color: #333;
            color: white;
            padding: 20px 0;
            text-align: center;
            margin-top: 20px;
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

<!-- Checker Portal Content -->
<div class="checker-content">
    <h2>Welcome to the Checker Portal</h2>
    <p>Scan the QR code below:</p>

    <div class="qr" id="startScan">
        <img src="../../images/scan.png" alt="Scanning Icon" class="scanning-icon">
    </div>
  
</div>

<!-- QR Code Scanner Modal -->
<div id="qrScannerModal">
    <video id="qrVideo" playsinline></video>
</div>

<script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        let scanner = null;

        // Function to start the QR code scanning
        function startScan() {
            const video = document.getElementById('qrVideo');
            scanner = new Instascan.Scanner({ video: video });

            scanner.addListener('scan', function (content) {
                alert('Scanned: ' + content);
              
                $('#qrScannerModal').hide();
                scanner.stop();
            });

            Instascan.Camera.getCameras().then(function (cameras) {
                if (cameras.length > 0) {
                    scanner.start(cameras[0]);
                    $('#qrScannerModal').show(); // Show the modal when scanning starts
                } else {
                    console.error('No cameras found.');
                }
            }).catch(function (e) {
                console.error(e);
            });
        }

        // Event listener for the startScan button
        $('#startScan').on('click', function () {
            startScan();
        });
    });
</script>
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

@endsection
