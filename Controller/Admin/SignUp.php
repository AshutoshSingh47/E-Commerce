<?php
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$password = $_POST["password"];
$phoneno = $_POST["phoneno"];
$gymname = $_POST["gymname"];
$address = $_POST["address"];
$conn = new mysqli("localhost", "root", "", "gym_admin");

if ($conn->connect_error) {
    die("connection failed" . $conn->connect_error);
}
$sql="SELECT Email FROM admin WHERE Email='$email'";
$result=$conn->query($sql);
if($result->num_rows>=1){
    echo "Email cannot be duplicate";
    exit();
}
$sql = "INSERT INTO admin(FirstName ,LastName ,Email ,Password,PhoneNo,GymName ,Address)
VALUES('$fname','$lname','$email','$password','$phoneno','$gymname','$address')";
if ($conn->query($sql) === TRUE) {
    header("Location: http://localhost/fitnationx/admin/signin");
} else {
    echo "Not Registered Successfully";
}
?>