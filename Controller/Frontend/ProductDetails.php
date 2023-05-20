<?php
$pID=$_GET['productid'];
$conn = new mysqli("localhost", "root", "", "gym_admin");
if ($conn->connect_error) {
    die("connection failed" . $conn->connect_error);
}

$sql = "SELECT * FROM adminproducts WHERE pID=$pID";

$result = $conn->query($sql);

?>