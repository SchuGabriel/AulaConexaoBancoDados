<?php

//Criar a instância do PDO

$pdo = new PDO("mysql:host=localhost;dbname=rankclientes", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Listar os carros

$query = "SELECT * FROM carros";
$statement = $pdo->prepare($query);
$statement->execute();
$carros = $statement->fetchAll();


//Exibindo o retorno na tela
/* echo "<pre>";
print_r($carros); */


echo "<table>";

echo "<tr>";
echo "<th>ID</th>";
echo "<th>Marca</th>";
echo "<th>Modelo</th>";
echo "<th>Ano</th>";
echo "<th>Placa</th>";
echo "<th>Cor</th>";
echo "</tr>";

foreach ($carros as $carro) {
    echo "<tr>";
    echo "<td>", $carro["id"], "</td>";
    echo "<td>", $carro["marca"], "</td>";
    echo "<td>", $carro["modelo"], "</td>";
    echo "<td>", $carro["ano"], "</td>";
    echo "<td>", $carro["placa"], "</td>";
    echo "<td>", $carro["cor"], "</td>";
}


echo "</table>";