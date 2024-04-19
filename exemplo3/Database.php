<?php


final class Database
{
    private $connection;


    public function __construct()
    {
        $this->connection = new PDO("mysql:host=" . HOST . ";dbname=" . BASE, USER, PASS);

        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    public function select($query, $binds = [])
    {
        $stmt = $this->connection->prepare($query);
        foreach ($binds as $param => $value) {
            $stmt->bindValue($param, $value); 
        }
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    

    public function execute($query, $binds = [])
    {
        
    }

    public function getLastInsertedId()
    {
        return $this->connection->lastInsertId();
    }

    public function __destruct()
    {
        $this->connection = null;
    }
}
