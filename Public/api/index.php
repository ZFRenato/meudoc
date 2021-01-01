<?php

require_once("../../vendor/autoload.php");

// HEADER 

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


// END HEADER


$controller = null;
$id = null;  //Param
$date = null;
$method = $_SERVER["REQUEST_METHOD"]; // POST, PUT, DELETE and GET

echo json_encode(["tipo" => $method]);

?>