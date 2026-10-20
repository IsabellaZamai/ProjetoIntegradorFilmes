
<?php

require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../login/verifica_user.php';

if (!isset($_GET['id'])) {
    echo "Nenhum filme selecionado.";
    exit;
}

$id = $_GET['id'];


// APAGAR COMENTÁRIO

if (isset($_GET['excluir'])) {

    excluir_comentario($conexao, $_GET['excluir']);

}


$filme = consultar_filme($conexao, $id);

if (!$filme) {
    echo "Filme não encontrado.";
    exit;
}


// CADASTRAR COMENTÁRIO

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $comentario = $_POST['comentario'];

    $id_usuario = $_SESSION['id_usuario'];

    cadastrar_comentario(
        $conexao,
        $id_usuario,
        $id,
        $comentario
    );
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/ProjetoIntegradorFilmes/style/style.css">

    <title>Filme</title>

</head>

<body>

<?php include __DIR__ . '/../includes/header.php'; ?>


<h1><?php echo $filme['nome']; ?></h1>

<p>
    Descrição: <?php echo $filme['descricao']; ?>
</p>

<p>
    Ano: <?php echo $filme['ano']; ?>
</p>

<hr>

<h2>Comentários</h2>

<div>
<form action="" method="POST">

    <label for="comentario">Comentário:</label>

    <br>

    <textarea name="comentario" id="comentario" required></textarea>

    <br>

    <button type="submit">Enviar</button>

    <button type="reset">Apagar</button>

</form>
</div>

<br>


<?php

listar_comentarios($conexao, $id);

?>


<?php include __DIR__ . '/../includes/footer.php'; ?>

</body>

</html>

