<?php
$productname = $_POST["productname"];
$productsku = $_POST["productsku"];
$productdescription = $_POST["productdescription"];
$price = $_POST["price"];
$quantity = $_POST["quantity"];
$productimage = $_POST["productimage"];
$productid = $_POST["productid"];

if ($productname != null) {
    $sql = "UPDATE adminproducts SET 
ProductName='$productname'
WHERE pID='$productid'";
    if ($conn->query($sql) === TRUE) {
        echo "Updated successfully";
    } else {
        echo "Not Updated successfully";
    }
}
if ($productsku != null) {
    $sql = "UPDATE adminproducts SET 
ProductSKU='$productsku'
WHERE pID='$productid'";
    if ($conn->query($sql) === TRUE) {
        echo "Updated successfully";
    } else {
        echo "Not Updated successfully";
    }
}
if ($productdescription != null) {
    $sql = "UPDATE adminproducts SET 
    ProductDescription='$productdescription'
    WHERE pID='$productid'";
    if ($conn->query($sql) === TRUE) {
        echo "Updated successfully";
    } else {
        echo "Not Updated successfully";
    }
}
if ($price != null) {
    $sql = "UPDATE adminproducts SET 
Price='$price'
WHERE pID='$productid'";
    if ($conn->query($sql) === TRUE) {
        echo "Updated successfully";
    } else {
        echo "Not Updated successfully";
    }
}
if ($quantity != null) {
    $sql = "UPDATE adminproducts SET 
Quantity='$quantity'
WHERE pID='$productid'";
    if ($conn->query($sql) === TRUE) {
        echo "Updated successfully";
    } else {
        echo "Not Updated successfully";
    }
}
if ($productimage != null) {
    $sql = "UPDATE adminproducts SET 
ProductImage='$productimage'
WHERE pID='$productid'";
    if ($conn->query($sql) === TRUE) {
        echo "Updated successfully";
    } else {
        echo "Not Updated successfully";
    }
}

?>