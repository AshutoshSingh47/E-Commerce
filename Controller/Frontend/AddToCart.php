<?php
$pID = $_POST['productid'];
$cID = $_POST['customerid'];
$quantity = $_POST['quantity'];

$conn = new mysqli("localhost", "root", "", "gym_admin");
if ($conn->connect_error) {
    die("connection failed" . $conn->connect_error);
}

$sql = "SELECT Price FROM adminproducts WHERE pID=$pID";
$result = $conn->query($sql);
$data = $result->fetch_assoc();
$totalPrice = $quantity * $data["Price"];

$sql = "SELECT Quantity FROM cart WHERE cID='$cID' AND pID='$pID'";
$result = $conn->query($sql);

if ($result->num_rows >= 1) {
    $sql = "UPDATE cart SET Quantity='$quantity', TotalPrice='$totalPrice' WHERE cID='$cID' AND pID='$pID'";
    $result = $conn->query($sql);
    echo ("Cart Updated");
} else {
    $sql = "INSERT INTO cart(cID, pID, Quantity, TotalPrice)
    VALUES('$cID', '$pID', '$quantity', '$totalPrice')";
    $result = $conn->query($sql);
    echo ("Item added successfully in Cart");
}