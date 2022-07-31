<?php

class Product
{   
    private PDO $connection;
    private $table = 'products';

    public $id;
    public $pname;
    public $category;
    public $price;
    public $created_at;

    public function __construct($db)
    {
        $this->connection = $db;
    }

    public function getTable() {
        return $this->table;
    }

    public function getConnection() {
        return $this->connection;
    }


}
