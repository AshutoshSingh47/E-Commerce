<?php
$conn = new mysqli("localhost", "root", "", "gym_admin");
if ($conn->connect_error) {
    die("connection failed" . $conn->connect_error);
}

$sql = "SELECT ProductImage, ProductName, Price FROM adminproducts";

$result = $conn->query($sql);

?>