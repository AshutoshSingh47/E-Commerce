<?php
$cID=$_SESSION["cID"];
$pID=[];
$conn = new mysqli("localhost", "root", "", "gym_admin");
if ($conn->connect_error) {
    die("connection failed" . $conn->connect_error);
}

$sql = "SELECT * FROM cart WHERE cID=$cID";

$result = $conn->query($sql);
$rows=$result->num_rows;
?>