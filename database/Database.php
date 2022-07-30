<?php
class Database
{
    private $host = 'localhost';
    private $db_name = 'products';
    private $username = 'root';
    private $password = '123';
    private $connection;


    public function connect() {
    
        $this->connection = null;


        try {
            $this->connection = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $err) {
            echo 'Connection error:' . $err->getMessage();
        }

        return $this->connection;
    }
}

