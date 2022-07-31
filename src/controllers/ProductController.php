<?php


class ProductController
{

     private $productServices;

     public function __construct(IServices $productServices)
     {
          $this->productServices = $productServices;
     }

     public function getAllRequest()
     {
          $data = $this->productServices->getAll();
          $numberOfProducts = $data->rowCount();

          if (isset($data)) {

               $products_arr = array();

               while($numberOfProducts > 0) {
                    $product_item = array(
                         'id'=>$id, 'pname' => $pname, 
                    );
                    $array_push($products_arr, $product_item);
                    $numberOfProducts = $numberOfProducts - 1;
               }
          }
     }

     public function getByIDRequest()
     {
     }

     public function postRequest()
     {
     }

     public function putRequest() {
     
     }

     public function deleteRequest() {
     
     }
}
