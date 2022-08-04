<?php

include_once '../Interfaces/IServices.php';
include_once '../models/Product.php';

class ProductServices implements IServices
{

    public $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function getAll()
    {
       
        $query = 'SELECT * FROM ' . $this->product->getTable() . ' ORDER BY created_at DESC';
        $statement = $this->product->getConnection()->query($query);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
        // $statement = $this->product->getConnection()->prepare($query);
        // $statement->execute();

        // return $statement;
    }

    public function getByID($id)
    {
        $query = 'SELECT * FROM ' . $this->product->getTable() . ' WHERE id=?';
        $statement = $this->product->getConnection()->prepare($query);
        $statement->bindParam(1, $id);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function createProduct(Product $product)
    {   
        // $query = 'INSERT INTO ' . $this->product->getTable() . ' (id, pname, category, price) VALUES (UUID(), :pname, :category, :price)';
        $query = 'INSERT INTO ' . $this->product->getTable() . ' SET id = UUID(), pname = :pname, category = :category, price = :price';
        $statement = $this->product->getConnection()->prepare($query);
        $statement->bindParam(':pname', $product->pname);
        $statement->bindParam(':category', $product->category);
        $statement->bindParam(':price', $product->price);
        if ($statement->execute()) {
            return true;
        } 

        return false;
        
       
    }

    public function updateProduct($id, Product $product)
    {   
        $query = 'UPDATE ' . $this->product->getTable() . ' SET pname = :pname, category= :category , price= :price WHERE id= :id';
        $statement = $this->product->getConnection()->prepare($query);
        $statement->bindParam(':id', $id);
        $statement->bindParam(':pname', $product->pname);
        $statement->bindParam(':category', $product->category);
        $statement->bindParam(':price', $product->price);
        if ($statement->execute()) {
            return true;
        } 

        return false;
    }

    public function deleteProduct($id)
    {   
        $query = 'DELETE FROM ' . $this->product->getTable() . ' WHERE id= :id';
        $statement = $this->product->getConnection()->prepare($query);
        $statement->bindParam(':id', $id);
        if ($statement->execute()) {
            return true;
        } 

        return false;
    }
}
