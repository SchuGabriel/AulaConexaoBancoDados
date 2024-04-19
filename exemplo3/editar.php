<?php
require_once("Config.php");
require_once("Database.php");

if(isset($_GET["id"])) {
    $db = new Database();
    $carro = $db->select("SELECT * FROM carros WHERE id = ?", [$_GET["id"]]);

    if($carro) {
        $id = $carro[0]["id"];
        $marca = $carro[0]["marca"];
        $modelo = $carro[0]["modelo"];
        $ano = $carro[0]["ano"];
        $placa = $carro[0]["placa"];
        $cor = $carro[0]["cor"];
    } else {
        echo "Carro não encontrado.";
        exit; 
    }
} else {
    echo "ID do carro não fornecido.";
    exit;
}

if(isset($_POST["submit"])) {
    $db = new Database();
    $query = "UPDATE carros
              SET marca = :marca,
                  modelo = :modelo,
                  ano = :ano,
                  placa = :placa,
                  cor = :cor
              WHERE id = :id";
    $binds = array(
        ":marca" => $_POST["marca"],
        ":modelo" => $_POST["modelo"],
        ":ano" => $_POST["ano"],
        ":placa" => $_POST["placa"],
        ":cor" => $_POST["cor"],
        ":id" => $_POST["id"]
    );
    $success = $db->execute($query, $binds);

    if($success) {
        echo "Carro atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar o carro.";
    }
}
?>

<form action="" method="POST">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <label for="marca">Marca:</label>
    <input type="text" id="marca" name="marca" placeholder="Marca do Carro" value="<?php echo $marca; ?>" required><br><br>

    <label for="modelo">Modelo:</label>
    <input type="text" id="modelo" name="modelo" placeholder="Modelo do Carro" value="<?php echo $modelo; ?>" required><br><br>

    <label for="ano">Ano:</label>
    <input type="number" id="ano" name="ano" placeholder="Ano do Carro" value="<?php echo $ano; ?>" required><br><br>

    <label for="placa">Placa:</label>
    <input type="text" id="placa" name="placa" placeholder="Placa do Carro" value="<?php echo $placa; ?>" required><br><br>

    <label for="cor">Cor:</label>
    <input type="text" id="cor" name="cor" placeholder="Cor do Carro" value="<?php echo $cor; ?>" required><br><br>

    <button type="submit" name="submit">Salvar Alterações</button>
</form>
