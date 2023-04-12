<?php

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$phoneno = $_POST["phoneno"];
$email = $_POST["email"];
$password = $_POST["password"];


$conn = new mysqli("localhost", "root", "", "gym_admin");
if ($conn->connect_error) {
    die("connection failed" . $conn->connect_error);
}

$sql = "INSERT INTO customer(FirstName, LastName, PhoneNo, Email, Password)
VALUES('$fname','$lname','$phoneno','$email','$password')";

if ($conn->query($sql)) {
    header("Location: http://localhost/E-Commerce/signin");
} else {
    echo "Not Registered" . $conn->error;
}
?>