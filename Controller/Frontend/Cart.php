<?php
$cID=$_SESSION["cID"];
$pID=[];
$conn = new mysqli("localhost", "root", "", "gym_admin");
if ($conn->connect_error) {
    die("connection failed" . $conn->connect_error);
}

$sql = "SELECT * FROM cart WHERE cID=$cID";

$result = $conn->query($sql);
$rows=$result->num_rows;
while($data=$result->fetch_assoc())
{
    $pID[$rows]=$data["pID"];
    $sql="SELECT ProductImage, ProductName, Price FROM adminproducts WHERE pID='$pID[$rows]'";
    $result2 = $conn->query($sql);
    while($data2=$result2->fetch_assoc())
    {
        // echo "<pre>";print_r($data2);
    }
    $rows--;
}
?>