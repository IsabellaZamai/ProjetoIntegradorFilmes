
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/../style/style.css">
    <?php

session_start();

require_once __DIR__ . '/../includes/functions.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

</head>

<body>

<h1>Login</h1>

<form action="" method="post">

    <label for="email">Email:</label>
    <input type="email" name="email" id="email">

    <br><br>

    <label for="senha">Senha:</label>
    <input type="password" name="senha" id="senha">

    <br><br>

    <input type="submit" value="Entrar">

</form>

<br>

<a href="cadastro.php">Criar uma conta</a>

<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $usuario = consultar_user(
        $conexao,
        $_POST['email']
    );

    if ($usuario && $usuario['senha'] == $_POST['senha']) {

        $_SESSION['id_usuario'] = $usuario['id_usuario'];

        header("Location: /index.php");
        exit;

    } else {

        echo "Email ou senha incorretos.";

    }

}

?>

</body>

</html>