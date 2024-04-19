<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de carros</title>
</head>
<body>
    <h1>Carros</h1>
    <a href="formulario.php">Inserir novo</a>
    <a href="excluirTela.php">excluir carro</a>
    
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Ano</th>
            <th>Placa</th>
            <th>Cor</th>
<<<<<<< HEAD
            <th>Editar</th>
=======
            <th>Ex</th>
>>>>>>> eacfe5a80c050c393110be9e29fad5c743f35a7d
        </tr>
        <?php
            require_once("Config.php");
            require_once("Database.php");
            $db = new Database();
            $carros = $db->select("SELECT * FROM carros");
            foreach($carros as $carro){
                echo "<tr>";
                echo "<td>" .$carro["id"]."</td>";
                echo "<td>" .$carro["marca"]."</td>";
                echo "<td>" .$carro["modelo"]."</td>";
                echo "<td>" .$carro["ano"]."</td>";
                echo "<td>" .$carro["placa"]."</td>";
                echo "<td>" .$carro["cor"]."</td>";
<<<<<<< HEAD
                echo "<th><a href='editar.php?id=".$carro["id"]."'>Editar</a></th>";
                echo "</tr>";
=======
                echo "<th><a href='excluir.php?id=".$carro["id"]."'>Ex</a></th>";
                echo "</tr>";

>>>>>>> eacfe5a80c050c393110be9e29fad5c743f35a7d
            }
        ?>
    </table>
</body>
</html>