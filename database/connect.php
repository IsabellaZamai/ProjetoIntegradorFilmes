<?php

$host = "192.168.10.29";
$dbname = "filmes";
$user = "filmes";
$pass = "1234";

try {

    $conexao = new PDO(
        "pgsql:host=$host;dbname=$dbname",
        $user,
        $pass
    );

} catch (PDOException $e) {

    echo "Erro: " . $e->getMessage();

}

?>
