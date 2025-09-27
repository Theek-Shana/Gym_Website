<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            background: url(paypic.webp) no-repeat center center/cover;
            
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh; /* Full viewport height */
            margin: 0; /* Remove default margin */
        }

        h1 {
            font-size: 2.5em;
            color: orange; /* Green color */
            margin-bottom: 20px; /* Space below heading */
        }

        p {
            font-size: 1.2em;
            text-align: center; /* Center-align text */
            margin: 0; /* Remove default margin */
        }

        .container {
            background-color: white; /* White background for content */
            padding: 20px; /* Padding around the content */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Thank You for Your Purchase!</h1>
        <p>Your order has been confirmed. A confirmation email has been sent to you.</p>
    </div>
</body>
</html>
