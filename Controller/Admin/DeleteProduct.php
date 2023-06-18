<?php
$pID=$_POST["productid"];


$sql="DELETE FROM adminproducts WHERE pID=$pID";


if($conn->query($sql) === TRUE){
    echo "Product is deleted successfully";
}else{
    echo "Product is not deleted successfully";
}

?>