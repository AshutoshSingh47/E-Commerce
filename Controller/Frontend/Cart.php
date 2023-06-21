<?php
$cID=$_SESSION["cID"];
$pID=[];

$sql = "SELECT * FROM cart WHERE cID=$cID";

$result = $conn->query($sql);
$rows=$result->num_rows;
?>