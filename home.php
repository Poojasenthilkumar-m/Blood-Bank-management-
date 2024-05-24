<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .navbar {
            background-color: #990000;
            padding: 1em;
            text-align: center;
        }
        .navbar a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
        }
        .hero {
            background-color: #e0e0e0;
            padding: 50px;
            text-align: center;
        }
        .hero h1 {
            color: #990000;
        }
        .hero a {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            background-color: #990000;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .section {
            padding: 20px;
            text-align: center;
        }
        .section h2 {
            color: #990000;
        }
        .donations {
            background-color: white;
            padding: 20px;
            margin: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="#">Home</a>
        <a href="#">About Us</a>
        <a href="donor_reg.php">Donate Blood</a>
        <a href="#">Contact Us</a>
    </div>
    
    <div class="hero">
        <h1>Save a Life, Donate Blood Today</h1>
        <p>Join our community of donors and help save lives. Your one donation can make a difference.</p>
        <a href="donor_reg.php">Donate Now</a>
    </div>
    
    <div class="section">
        <h2>About Us</h2>
        <p>Our mission is to ensure a safe and adequate supply of blood for patients in need. We are committed to providing the highest quality blood services, promoting voluntary blood donation, and supporting medical care and research.</p>
        <a href="#">Learn More</a>
    </div>
    
    <div class="section">
        <h2>Services</h2>
        <p>Blood Donation: Become a donor and save lives. <a href="donor_reg.php">Register Now</a></p>
        <p>Blood Request: Need blood for a patient? Submit a request here. <a href="#">Request Blood</a></p>
        <p>Want to delete the account ??? <a href="deleteform.php"> Delete</a></p>
    </div>
    
    <div class="section donations">
        <h2>Recent Donations</h2>
        <p>John Doe: A+ Blood Donor | Last Donation: 2024-05-15</p>
        <p>Jane Smith: O- Blood Donor | Last Donation: 2024-05-14</p>
        <p>Michael Johnson: B+ Blood Donor | Last Donation: 2024-05-10</p>
    </div>
</body>
</html>
