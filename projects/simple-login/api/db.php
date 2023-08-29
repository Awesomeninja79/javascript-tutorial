<?php
header('Access-Control-Allow-Methods: GET');
// header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');

$dbHost = "127.0.0.1";
$dbName = "u969147136_simple_login";
$dbUserName = "u969147136_simple_login";
$dbUserPassword = "K*7siuh(*807Q%HG5dm6T*Gus";

$mysqli = new mysqli($dbHost, $dbUserName, $dbUserPassword, $dbName);

// Check connection
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

function setError($code, $text) {
    $errorArr = array(
        "code" => $code,
        "responseText" => $text
    );
    http_response_code($errorArr['code']);
    echo json_encode($errorArr);
    exit();
}


?>