<?php
$pID=$_GET['productid'];

$sql = "SELECT * FROM adminproducts WHERE pID=$pID";

$result = $conn->query($sql);

?>