<?php

require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../login/verifica_user.php';

?>

<?php
require_once __DIR__ . '/../includes/functions.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/ProjetoIntegrador/style/style.css">

    <title>Cadastrar Filme</title>

</head>

<body>

<?php include __DIR__ . '/../includes/header.php'; ?>

<h1>Cadastrar Filme</h1>

<form action="" method="post">

    <label for="nome">Nome do filme:</label>
    <input type="text" name="nome" id="nome">

    <br><br>

    <label for="descricao">Descrição:</label>
    <textarea name="descricao" id="descricao"></textarea>

    <br><br>

    <label for="ano">Ano:</label>
    <input type="number" name="ano" id="ano">

    <br><br>

    <input type="reset" value="Limpar">
    <input type="submit" value="Cadastrar">

</form>

<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    cadastrar_filme(
        $conexao,
        $_POST['nome'],
        $_POST['descricao'],
        $_POST['ano']
    );

}

?>

<?php include __DIR__ . '/../includes/footer.php'; ?>

</body>

</html>