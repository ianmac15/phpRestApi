<?php

class ProductController {

   private $productServices;
   
   public function __construct(ProductServices $productServices)
   {
        $this->productServices = $productServices;
   }

   public function getAllRequest() {
        $data = $productServices->getAll();
   }
}