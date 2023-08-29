<?php
// $client_id = 'user';
// $client_secret = 7303448803;
// header('Authorization: Basic '.base64_encode("$client_id:$client_secret"));
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');

$data = array(
    array("user_id" => 1, "username" => "Nandkishor", "user_email" => "nandkishor@gmail.com", "user_status" => true),
    array("user_id" => 2, "username" => "Neeraj", "user_email" => "neeraj@gmail.com", "user_status" => false),
    array("user_id" => 3, "username" => "Bob", "user_email" => "bob@gmail.com", "user_status" => false),
    array("user_id" => 4, "username" => "John", "user_email" => "john@gmail.com", "user_status" => true),
    array("user_id" => 5, "username" => "Mark", "user_email" => "mark@gmail.com", "user_status" => true),
    array("user_id" => 6, "username" => "Ville", "user_email" => "ville@gmail.com", "user_status" => false)
);
echo json_encode($data);