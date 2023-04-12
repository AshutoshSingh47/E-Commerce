<?php

$pname = $_POST["pname"];
$psku = $_POST["psku"];
$pdescription = $_POST["pdescription"];
$price = $_POST["price"];
$quantity = $_POST["quantity"];
$pimage = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];
$aID = $_SESSION["aID"];
$conn = new mysqli("localhost", "root", "", "gym_admin");
if ($conn->connect_error) {
    die("connection failed" . $conn->connect_error);
}
$sql = "INSERT INTO adminproducts(aID,ProductName, ProductSKU, ProductDescription, Price, Quantity, ProductImage)
VALUES('$aID','$pname','$psku','$pdescription','$price','$quantity','$pimage')";

$path = "../E-Commerce/View/images/" . $pimage;
if ($conn->query($sql) === TRUE) {
    move_uploaded_file($tmp, $path);
    header("Location: http://localhost/E-Commerce/admin/products");
} else {
    echo ("Not created table");
}
?>