<?php
$aID=$_SESSION["aID"];

$conn = new mysqli("localhost", "root", "", "gym_admin");
if ($conn->connect_error) {
    die("connection failed" . $conn->connect_error);
}

$sql="SELECT * FROM adminproducts WHERE aID='$aID'";

$result=$conn->query($sql);
?>