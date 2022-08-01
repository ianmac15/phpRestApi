<?php

include './IServices.php';

class ProductServices implements IServices
{

    public $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function getAll(): PDOStatement
    {
       
        $query = 'SELECT * FROM' . $this->product->getTable() . 'ORDER BY created_at DESC';
        $statement = $this->product->getConnection()->query($query);
        return $statement;
        // $statement = $this->product->getConnection()->prepare($query);
        // $statement->execute();

        // return $statement;
    }

    public function getByID($id)
    {
        $query = 'SELECT * FROM' . $this->product->getTable() . 'WHERE id = ' . $id . 'ORDER BY created_at DESC';
        $statement = $this->product->getConnection()->query($query);
        // $statement = $this->product->getConnection()->prepare($query);
        // $statement->bindParam(1, $this->product->id);
        // $statement->execute();

        // $data = $statement->fetch(PDO::FETCH_ASSOC);

        return $statement->fetch(PDO::FETCH_ASSOC);
        // $statement->bindParam(1, $this->product)
        // $statement->execute();

        // return $statement;
    }

    public function createProduct(Product $product)
    {   
        $query = 'INSERT INTO' . $this->product->getTable() . '(id, pname, category, price) VALUES (UUID(),'  . $product->pname . ', ' . $product->category . ', ' . $product->price .')';
        $statement = $this->product->getConnection()->query($query);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function updateProduct($id, Product $product)
    {   
        $query = 'UPDATE' . $this->product->getTable() . 'WHERE id= ' . $id . ' SET pname =' . $this->product->pname . ', category=' . $this->product->category . ', price=' . $this->product->price . ', WHERE 1';
        $statement = $this->product->getConnection()->query($query);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function deleteProduct($id)
    {   
        $query = 'DELETE FROM' . $this->product->getTable() . 'WHERE id=' .$id;
        $statement = $this->product->getConnection()->query($query);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }
}
