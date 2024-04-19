<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Carros</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Ano</th>
            <th>Placa</th>
            <th>Cor</th>
        </tr>

        <form action=""></form>
        <?php
            require_once("config.php");
            require_once("Database.php");
            $db = new Database();
            $carros = $db->select("SELECT * FROM carros");

            foreach ($carros as $carro) {
                echo "<tr>";
                echo "<td>", $carro["id"], "</td>";
                echo "<td>", $carro["marca"], "</td>";
                echo "<td>", $carro["modelo"], "</td>";
                echo "<td>", $carro["ano"], "</td>";
                echo "<td>", $carro["placa"], "</td>";
                echo "<td>", $carro["cor"], "</td>";
            }
            
        ?>;
        </table>
    </body>
</html>