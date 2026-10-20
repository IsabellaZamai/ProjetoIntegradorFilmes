<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/ProjetoIntegradorFilmes/style/style.css">
<?php

require_once __DIR__ . '/../includes/functions.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ProjetoIntegrador/style/style.css">

    <title>Cadastrar Usuário</title>

</head>

<body>

<h1>Criar conta</h1>

<form action="" method="post">

    <label for="email">Email:</label>

    <input type="email" name="email" id="email">

    <br><br>

    <label for="senha">Senha:</label>

    <input type="password" name="senha" id="senha">

    <br><br>

    <input type="submit" value="Cadastrar">

</form>

<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    cadastrar_user(
        $conexao,
        $_POST['email'],
        $_POST['senha']
    );

}

?>


<br>

<a href="login.php">Ir pro Login</a>



</body>

</html>