<?php

require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../login/verifica_user.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/ProjetoIntegrador/style/style.css">

    <title>Excluir Filme</title>

</head>

<body>

<?php include __DIR__ . '/../includes/header.php'; ?>

<h1>Excluir Filme</h1>

<form action="" method="post">

    <label for="id">ID do filme:</label>

    <input type="number" name="id" id="id">

    <br><br>

    <input type="submit" value="Excluir">

</form>

<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    excluir_filme(
        $conexao,
        $_POST['id']
    );

}

?>

<?php include __DIR__ . '/../includes/footer.php'; ?>

</body>

</html>