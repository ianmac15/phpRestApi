<?php

class ProductController {

   private $productServices;
   
   public function __construct(IServices $productServices)
   {
        $this->productServices = $productServices;
   }

   public function getAllRequest() {
        $data = $this->productServices->getAll();

        if (isset($data)) {
            
        }
   }
}