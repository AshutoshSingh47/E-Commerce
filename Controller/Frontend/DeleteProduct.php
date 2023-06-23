<?php
$cartid = $_POST["cartid"];
$customerid = $_POST["customerid"];

$sql = "DELETE FROM cart WHERE cartID='$cartid' AND cID='$customerid'";

if ($conn->query($sql) === TRUE) {
    echo "Cart updated successfully";
} else {
    echo "Cart not updated successfully";
}
?>