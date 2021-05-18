<?php
use Firebase\JWT\JWT;
include "vendor/autoload.php";

$key = "hello";
$payload = array(
    "username" => "rudra1055",
    "password" => "rudra55",
    "number" => 1356999524
);

$encodeString = JWT::encode($payload, $key);

echo $encodeString;