<?php
use Firebase\JWT\JWT;
include "vendor/autoload.php";

$key = "hello";
$jwtString = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VybmFtZSI6InJ1ZHJhMTA1NSIsInBhc3N3b3JkIjoicnVkcmE1NSIsIm51bWJlciI6MTM1Njk5OTUyNH0.AN0TVFFdUJc2xXzPQMSzP_wjaTicaJOxvinRHwspY3g";

$decodedValue = JWT::decode($jwtString, $key, array('HS256'));

echo "<pre>";
print_r($decodedValue);