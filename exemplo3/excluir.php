<?php
require_once("config.php");
require_once("Database.php");

$db = new Database();
<<<<<<< HEAD
print_r($_POST["id"]);
$sucess = $db->execute("DELETE FROM carros 
                        WHERE id = :id ",
                        [
                            ":id" =>$_POST["id"],
=======
print_r($_POST["modelo"]);
$sucess = $db->execute("DELETE FROM carros 
                        WHERE modelo = :modelo ",
                        [
                            ":modelo" =>$_POST["modelo"],
>>>>>>> eacfe5a80c050c393110be9e29fad5c743f35a7d
                        ]);
if($sucess){
    //Direciona pro index
    header("location: index.php");
} else {
    echo "deu ruim :(" ;
}