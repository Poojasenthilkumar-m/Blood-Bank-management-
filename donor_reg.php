<?php
    include("db.php");
?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank Management - Register Donor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url("https://png.pngtree.com/thumb_back/fh260/back_our/20190619/ourmid/pngtree-geometric-gradient-creative-blood-donation-poster-background-material-image_134137.jpg");
            margin: 0;
            background-position: center;
            background-size: cover;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        .container h1 {
            margin-top: 0;
            color: #d9534f;
        }
        .container input[type="text"], 
        .container input[type="email"],
        .container input[type="tel"], 
        .container select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .container button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #d9534f;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        .container button:hover {
            background-color: #c9302c;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Register Donor</h1>
        <form name ="form" method="post" action = "donor2php.php"> 
            <input type="text" name="name" placeholder="name" required>
            <input type="text" name="blood_type" placeholder="blood_type" required>
            <input type="tel" name="phone" placeholder="phone" required>
            <input type="text" name="city" placeholder="city" required>
            <input type="text" name="state" placeholder="state" required>
            <input type="email" name="email" placeholder="email" required>
            <button type="submit">submit</button>
        </form>
    </div>
</body>
</html>
