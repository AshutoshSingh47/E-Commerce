<?php
$cID = $_SESSION["cID"];
$sql = "SELECT * FROM shippingdetails  WHERE cID='$cID'";
$result = $conn->query($sql);
$rows = $result->num_rows;



//     while ($rows != 0) {
//          echo"Hi";
//         while ($data = $result->fetch_assoc()) {
//             echo"<pre>"; print_r($data);
//             break;
//         }

//         $rows--;
//     }
// die();
?>