<?php

    include './database/Database.php';
    include './models/Product.php';
    include './services/ProductServices.php';
    include './controllers/ProductController.php';
    include './services/IServices.php';
    set_include_path('C:\xampp\php\PEAR');

    header('Access-Control-Allow-Origin: *');
    header('Content-Type/application/json');

    $db = new Database();
    $product = new Product($db->connect());
    $productServices = new ProductServices($product);
    // $productController = new ProductController($productServices);

   


