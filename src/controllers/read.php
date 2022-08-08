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

// if (isset($result)) {
//     echo json_encode($result);
// } else {
//     echo json_encode(array('message' => 'There are no products'));
// }

$xml = new DOMDocument('1.0');
$xml->formatOutput = true;
$products = $xml->createElement("products");
$xml->appendChild($products);

for ($i = 0; $i < count($result); $i++) {
    $product = $xml->createElement("product");
    $products->appendChild($product);

    $id = $xml->createElement("id", $result[$i]['id']);
    $product->appendChild($id);

    $pname = $xml->createElement("name", $result[$i]['pname']);
    $product->appendChild($pname);

    $category = $xml->createElement("category", $result[$i]['category']);
    $product->appendChild($category);

    $price = $xml->createElement("price", $result[$i]['price']);
    $product->appendChild($price);  

    $created_at = $xml->createElement("created_at", $result[$i]['created_at']);
    $product->appendChild($created_at);
}

echo "" . $xml->saveXML() . "";
$xml->save("report.xml");