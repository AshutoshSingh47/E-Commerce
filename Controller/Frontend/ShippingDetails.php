<?php

$cID = $_SESSION["cID"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$phoneno = $_POST["phoneno"];
$houseno = $_POST["houseno"];
$streetname = $_POST["streetname"];
$city = $_POST["city"];
$state = $_POST["state"];
$country = $_POST["country"];
$pincode = $_POST["pincode"];

if ($fname == null) {
    $fname = $data["FirstName"];
}
if ($lname == null) {
    $lname = $data["LastName"];
}
if ($email == null) {
    $email = $data["Email"];
}
if ($phoneno == null) {
    $phoneno = $data["PhoneNo"];
}

$sql = "INSERT INTO shippingdetails(cID, FirstName, LastName, Email, PhoneNo, HouseNo, StreetName, City, State, Country, PinCode) 
VALUES('$cID', '$fname', '$lname', '$email', '$phoneno', '$houseno', '$streetname', '$city', '$state', '$country', '$pincode')";

if ($conn->query($sql) === TRUE) {
    echo "Yes";
} else {
    echo "No";
}
?>