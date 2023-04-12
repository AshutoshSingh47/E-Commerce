<?php

$email = $_POST["email"];
$password = $_POST["password"];
$conn = new mysqli("localhost", "root", "", "gym_admin");

if ($conn->connect_error) {
    die("connection failed" . $conn->connect_error);
}

$sql = "SELECT aID, Email, Password FROM admin WHERE Email='$email' AND Password='$password'";
$result=$conn->query($sql);
$values=$result->fetch_assoc();
if ($result->num_rows>=1) {
    $_SESSION["aID"]=$values["aID"];
    header("Location: http://localhost/E-Commerce/admin");

} else {
    echo "Not logged in";
}
?>