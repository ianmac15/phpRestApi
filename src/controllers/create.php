<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers, Content-Type,Access-Control-Allow-Methods, Authorization, X-Reqquested-With');

include_once '../database/Database.php';
include_once '../models/Product.php';
include_once '../services/ProductServices.php';

$database = new Database();
$db = $database->connect();
$product = new Product($db);
$productServices = new ProductServices($product);

// $dataInput = array('id' => $_POST['id'], 'pname'=> $_POST['pname'], 'category' => $_POST['category'], 'price' => $_POST['price']);

$data = json_decode(file_get_contents("php://input"));
$product->pname = $data->pname;
$product->category = $data->category;
$product->price = $data->price;
// $product->pname = $_POST['pname'];
// $product->category = $_POST['category'];
// $product->price = $_POST['price'];
$result = $productServices->createProduct($product);

// echo json_encode($result);

if (isset($result) && $result!=false) {
    echo json_encode(array('message'=>'Product created successfully'));
} else {
    echo json_encode(array('message'=>'Invalid product'));
}