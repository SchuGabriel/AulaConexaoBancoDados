<?php
require_once("config.php");
require_once("Database.php");

$db = new Database();
print_r($_POST["modelo"]);
$sucess = $db->execute("DELETE FROM carros 
                        WHERE modelo = :modelo ",
                        [
                            ":modelo" =>$_POST["modelo"],
                        ]);
if($sucess){
    //Direciona pro index
    header("location: index.php");
} else {
    echo "deu ruim :(" ;
}