<?php

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$phoneno = $_POST["phoneno"];
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "INSERT INTO customer(FirstName, LastName, PhoneNo, Email, Password)
VALUES('$fname','$lname','$phoneno','$email','$password')";

if ($conn->query($sql)) {
    header("Location: http://localhost/fitnationx/signin");
} else {
    echo "Not Registered" . $conn->error;
}
?>