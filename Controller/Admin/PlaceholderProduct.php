<?php
$productid = $_GET["productid"];

$sql = "SELECT * FROM adminproducts WHERE pID=$productid";

$result = $conn->query($sql);
$data = $result->fetch_assoc();
?>