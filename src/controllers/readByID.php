<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers, Content-Type,Access-Control-Allow-Methods, Authorization, X-Reqquested-With');

include_once '../database/Database.php';
include_once '../models/Product.php';
include_once '../services/ProductServices.php';

$database = new Database();
$db = $database->connect();
$product = new Product($db);
$productServices = new ProductServices($product);




$id = isset($_GET['id']) ? $_GET['id'] : die(); 

$result = $productServices->getByID($id);

// echo json_encode($result);

if (isset($result) && $result!=false) {
    echo json_encode($result);
} else {
    echo json_encode(array('message'=>'There is no product with id: ' . $id));
}