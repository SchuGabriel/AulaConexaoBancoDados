<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de carro</title>
</head>
<body>
    <h1>Carros</h1>
    <form action="salvar.php" method="POST">
        <input type="text" name="marca" placeholder="marca">
        <br>
        <input type="text" name="modelo" placeholder="modelo">
        <br>
        <input type="text" name="ano" placeholder="ano">
        <br>
        <input type="text" name="placa" placeholder="placa">
        <br>
        <input type="text" name="cor" placeholder="cor">
        <br>
        <button type="submit">Salvar</button>
    </form>

</body>
</html>