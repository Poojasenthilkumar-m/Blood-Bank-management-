<?php
$conn = mysqli_connect("localhost", "root", "", "bloodbank");

// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Taking all values from the form data (input)
$name = $_REQUEST['name'];
$blood_type = $_REQUEST['blood_type'];
$phone = $_REQUEST['phone'];
$city = $_REQUEST['city'];
$state = $_REQUEST['state'];
$email = $_REQUEST['email'];

// Check if the email already exists
$checkemail = "SELECT * FROM donor_reg WHERE email = ?";
$stmt = $conn->prepare($checkemail);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows > 0){
    echo "Email Already Exists!";
} else {
    // Prepare an insert statement
    $sql = "INSERT INTO donor_reg (name, blood_type, phone, city, state, email) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $name, $blood_type, $phone, $city, $state, $email);

    // Execute the insert statement
    if($stmt->execute()){
        header("location: thank you.php");
        exit();
    } else {
        echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
    }
}

// Close connection
$stmt->close();
$conn->close();
?>
