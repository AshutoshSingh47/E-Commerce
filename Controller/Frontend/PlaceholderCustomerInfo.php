<?php
$cID=$_SESSION["cID"];

$sql="SELECT * FROM customer WHERE cID='$cID'";

$result=$conn->query($sql);
$data=$result->fetch_assoc();
?>