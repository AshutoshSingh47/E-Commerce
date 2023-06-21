<?php
$aID=$_SESSION["aID"];

$sql="SELECT * FROM adminproducts WHERE aID='$aID'";

$result=$conn->query($sql);
?>