<?php
$cID=$_SESSION["cID"];
$sql = "SELECT * FROM shippingdetails  WHERE cID='$cID'";
$result=$conn->query($sql);
$rows=$result->num_rows;

// echo $rows;


// while($rows!=0)
// {
//     while($data=$result->fetch_assoc())
//     {
//        echo"<pre>"; print_r($data);
//     }
//     echo "\n";
// $rows--;
// }
// die();
?>