<?php
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "SELECT cID, Email, Password FROM customer WHERE Email='$email' AND Password='$password'";
$result = $conn->query($sql);
$values = $result->fetch_assoc();
if ($result->num_rows >= 1) {
    $_SESSION["cID"] = $values["cID"];
    header("Location: http://localhost/fitnationx/");
} else {
    echo "Not Registered" . $conn->error;
}
?>