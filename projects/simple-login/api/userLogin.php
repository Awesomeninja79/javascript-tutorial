<?php
require_once "db.php";

if (empty($_GET['useremail'])) {
    setError(401, "Email cannot be empty!");
}

if (empty($_GET['password'])) {
    setError(401, "Password cannot be empty!");
}

$sqlQuery = "SELECT user_id, user_email, user_password, user_gender FROM users WHERE user_email='".$_GET['useremail']."' AND user_password='".$_GET['password']."'";

$result = $mysqli->query($sqlQuery);

if($result->num_rows == 0) {
    setError(401, "Please check your credentials!");
}

$data = $result->fetch_assoc();

echo json_encode($data);

?>