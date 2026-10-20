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

    <title>Comentário</title>

</head>

<body>

<?php include __DIR__ . '/../includes/header.php'; ?>


<h1>Adicionar comentário</h1>


<?php

if (isset($_GET['id'])) {

    $id_filme = $_GET['id'];

} else {

    echo "Filme não encontrado.";

    exit;

}

?>


<form action="" method="post">

    <label for="comentario">Comentário:</label>

    <br>

    <textarea name="comentario" id="comentario"></textarea>

    <br><br>

    <input type="submit" value="Comentar">

</form>


<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    cadastrar_comentario(
        $conexao,
        $_SESSION['id_usuario'],
        $id_filme,
        $_POST['comentario']
    );

}

?>


<?php include __DIR__ . '/../includes/footer.php'; ?>

</body>

</html>