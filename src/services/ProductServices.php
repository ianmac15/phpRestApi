<?php

class ProductServices implements IServices
{

    private $products;

    public function __construct(Product $products)
    {
        $this->products = $products;
    }

    public function getAll()
    {
        $query = 'SELECT 
            id, 
            name, 
            category, 
            price, 
            created_at 
        FROM' . $this->products->getTable() .
            'ORDER BY 
        created_at DESC';

        $statement = $this->products->getConnection()->prepare($query);
        $statement->execute();

        return $statement;
    }
    
    public function getByID($id)
    {
        return;
    }

    public function createProduct(Product $product)
    {
        return;
    }

    public function updateProduct($id, Product $product)
    {
        return;
    }

    public function deleteProduct($id)
    {
        return;
    }
}
