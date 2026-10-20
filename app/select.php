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

    <title>Filmes</title>

</head>

<body>

<?php include __DIR__ . '/../includes/header.php'; ?>

<h1>Filmes cadastrados</h1>

<?php

$sql = "SELECT * FROM filmes";

$stmt = $conexao->prepare($sql);

$stmt->execute();

$filmes = $stmt->fetchAll(PDO::FETCH_ASSOC);


foreach ($filmes as $filme) {

    echo "<hr>";

    echo "ID: " . $filme['id_filme'] . "<br>";

    echo "Nome: " . $filme['nome'] . "<br>";

    echo "Ano: " . $filme['ano'] . "<br>";

    echo "<br>";

    echo "<a href='/app/filme.php?id=" . $filme['id_filme'] . "'>";
    echo "Ver comentários";
    echo "</a>";

}

?>

<?php include __DIR__ . '/../includes/footer.php'; ?>

</body>

</html>