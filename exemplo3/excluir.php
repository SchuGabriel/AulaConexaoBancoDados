<?php
require_once("config.php");
require_once("Database.php");

$db = new Database();
print_r($_POST["id"]);
$sucess = $db->execute("DELETE FROM carros 
                        WHERE id = :id ",
                        [
                            ":id" =>$_POST["id"],
                        ]);
if($sucess){
    //Direciona pro index
    header("location: index.php");
} else {
    echo "deu ruim :(" ;
}