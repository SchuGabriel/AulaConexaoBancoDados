<?php

final class Database{
    private $connection;
    public function __construct(){
        $this->connection = new PDO("mysql:host=".HOST.";dbname=".BASE, USER, PASS);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    //binds se nao for fornecido vai ser um array vazio
    public function select($query, $binds = []){
        $stmt = $this->connection->prepare($query);
        foreach($binds as $param => $value){
            $stmt->bindValue($param, $value);
        }
        $stmt->execute();
        //FETCH_ASSOC associa as colunas as posições do array...
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    //Vai retornar se deu sucesso ou nao a execução
    public function execute($query, $binds = []){
        $stmt = $this->connection->prepare($query);
        foreach($binds as $param => $value){
            $stmt->bindValue($param, $value);
        }
        return $stmt->execute();
    }
    public function getLastInsertId(){
        return $this->connection->lastInsertId();
    }
    //Fechar conecção com o banco, ajuda na segurança
    public function __destruct(){
        $this->connection = null;
    }

}
