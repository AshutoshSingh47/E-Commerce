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
    $conn->query($sql);
}
if ($productsku != null) {
    $sql = "UPDATE adminproducts SET 
ProductSKU='$productsku'
WHERE pID='$productid'";
    $conn->query($sql);
}
if ($productdescription != null) {
    $sql = "UPDATE adminproducts SET 
    ProductDescription='$productdescription'
    WHERE pID='$productid'";
    $conn->query($sql);
}
if ($price != null) {
    $sql = "UPDATE adminproducts SET 
Price='$price'
WHERE pID='$productid'";
    $conn->query($sql);
}
if ($quantity != null) {
    $sql = "UPDATE adminproducts SET 
Quantity='$quantity'
WHERE pID='$productid'";
    $conn->query($sql);
}
if ($productimage != null) {
    $sql = "UPDATE adminproducts SET 
ProductImage='$productimage'
WHERE pID='$productid'";
    $conn->query($sql);
}

echo "Product Updated successfully";
?>