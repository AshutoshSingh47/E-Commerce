<?php

$email = $_POST["email"];
$password = $_POST["password"];

$sql = "SELECT aID, Email, Password FROM admin WHERE Email='$email' AND Password='$password'";
$result=$conn->query($sql);
$values=$result->fetch_assoc();
if ($result->num_rows>=1) {
    $_SESSION["aID"]=$values["aID"];
    header("Location: http://localhost/fitnationx/admin");

} else {
    echo "Not logged in";
}
?>