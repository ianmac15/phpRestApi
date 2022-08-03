<?php
class Database
{
    private $host = 'localhost';
    private $db_name = 'productsdb';
    private $username = 'root';
    private $password = '';
    private PDO $connection;


    public function connect()
    {

        // $this->connection = null;

        $this->connection = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // try {

        // } catch(PDOException $err) {
        //     echo 'Connection error:' . $err->getMessage();
        // }

        return $this->connection;
    }
}
