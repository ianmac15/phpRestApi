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
$result = $productServices->getAll();

if (isset($result)) {
    echo json_encode($result);
} else {
    echo json_encode(array('message' => 'There are no products'));
}