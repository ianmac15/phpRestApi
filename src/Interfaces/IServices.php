<?php

interface IServices {
    public function getAll();
    public function getByID($id);
    public function createProduct(Product $product);
    public function updateProduct($id, Product $product);
    public function deleteProduct($id);
}