<?php

require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../login/verifica_user.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/ProjetoIntegradorFilmes/style/style.css">

    <title>Buscar Filme</title>

</head>

<body>

<?php include __DIR__ . '/../includes/header.php'; ?>

<h1>Buscar Filme</h1>

<form action="" method="get">

    <label for="id">ID do filme:</label>

    <input type="number" name="id" id="id">

    <input type="submit" value="Buscar">

</form>


<?php

if (isset($_GET['id'])) {

    $filme = consultar_filme(
        $conexao,
        $_GET['id']
    );

    if ($filme) {

        echo "<hr>";

        echo "ID: " . $filme['id_filme'] . "<br>";

        echo "Nome: " . $filme['nome'] . "<br>";

        echo "Descrição: " . $filme['descricao'] . "<br>";

        echo "Ano: " . $filme['ano'] . "<br>";

    } else {

        echo "Filme não encontrado.";

    }

}

?>

<?php include __DIR__ . '/../includes/footer.php'; ?>

</body>

</html>