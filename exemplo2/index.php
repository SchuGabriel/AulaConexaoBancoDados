<?php

//Criar a instância do PDO

$pdo = new PDO("mysql:host=localhost;dbname=rankclientes", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// Preparar a consulta para inserir um carro no banco 
$query = "INSERT INTO carros(marca,modelo,ano,placa,cor) VALUES 
(:marca, :modelo, :ano, :placa, :cor)";

$stmt = $pdo->prepare($query);

// Atribuir valores às variaveis da consulta
$stmt->bindValue(":marca","Ford");
$stmt->bindValue(":modelo","EcoSport");
$stmt->bindValue(":ano",2005);
$stmt->bindValue(":placa","IUP4737");
$stmt->bindValue(":cor","Branco");

// Executar a query
$sucesso = $stmt->execute();

if($sucesso){
    echo "Deu certo - ID do Usuario: ", $pdo->lastInsertId();
}else{
    echo "Deu errado";
}

