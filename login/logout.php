<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/ProjetoIntegradorFilmes/style/style.css"><?php

session_start();

session_destroy();

header("Location: /index.php");

exit;

?>