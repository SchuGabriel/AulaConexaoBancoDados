<?php
require_once("config.php");
require_once("Database.php");

$db = new Database();
$sucess = $db->execute("INSERT iNTO carros
                            (marca, modelo, ano, placa,cor)
                        VALUES 
                            (:marca, :modelo, :ano, :placa, :cor)" ,
                        [
                            ":marca" =>$_POST["marca"] ,
                            ":modelo" =>$_POST["modelo"],
                            ":ano" =>$_POST["ano"],
                            ":placa" => $_POST["placa"],
                            ":cor" => $_POST["cor"],
                        ]);
if($sucess){
    header("location: index.php");
} else {
    echo "deu ruim :(" ;
}