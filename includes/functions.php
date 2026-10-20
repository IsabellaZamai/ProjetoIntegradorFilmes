<?php

require_once __DIR__ . '/../database/connect.php';


// CADASTRAR FILME

function cadastrar_filme($conexao, $nome, $descricao, $ano)
{
    $sql = "INSERT INTO filmes(nome, descricao, ano)
            VALUES(:nome, :descricao, :ano)";

    $stmt = $conexao->prepare($sql);

    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":descricao", $descricao);
    $stmt->bindParam(":ano", $ano);

    $stmt->execute();

    echo "Filme cadastrado com sucesso!";
}


// EXCLUIR FILME

function excluir_filme($conexao, $id)
{
    $sql = "DELETE FROM filmes WHERE id_filme = :id";

    $stmt = $conexao->prepare($sql);

    $stmt->bindParam(":id", $id);

    $stmt->execute();

    echo "Filme excluído com sucesso!";
}


// CONSULTAR FILME

function consultar_filme($conexao, $id)
{
    $sql = "SELECT * FROM filmes WHERE id_filme = :id";

    $stmt = $conexao->prepare($sql);

    $stmt->bindParam(":id", $id);

    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
}


// ATUALIZAR FILME

function atualizar_filme($conexao, $id, $nome, $descricao, $ano)
{
    $sql = "UPDATE filmes
            SET nome = :nome,
                descricao = :descricao,
                ano = :ano
            WHERE id_filme = :id";

    $stmt = $conexao->prepare($sql);

    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":descricao", $descricao);
    $stmt->bindParam(":ano", $ano);
    $stmt->bindParam(":id", $id);

    $stmt->execute();

}


// CADASTRAR USUÁRIO


function cadastrar_user($conexao, $email, $senha)
{
    $sql = "INSERT INTO usuarios(email, senha)
            VALUES(:email, :senha)";

    $stmt = $conexao->prepare($sql);

    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":senha", $senha);

    if ($stmt->execute()) {
        header("Location: /SistemaFilme/login/login.php");
        exit;
    } else {
        echo "Erro no Cadastro!";
    }
}


// CONSULTAR USUÁRIO

function consultar_user($conexao, $email)
{
    $sql = "SELECT id_usuario, email, senha
            FROM usuarios
            WHERE email = :email";

    $stmt = $conexao->prepare($sql);

    $stmt->bindParam(":email", $email);

    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
}


// CADASTRAR COMENTÁRIO

function cadastrar_comentario($conexao, $id_usuario, $id_filme, $comentario)
{
    $sql = "INSERT INTO comentarios(id_usuario, id_filme, comentario)
            VALUES(:id_usuario, :id_filme, :comentario)";

    $stmt = $conexao->prepare($sql);

    $stmt->bindParam(":id_usuario", $id_usuario);
    $stmt->bindParam(":id_filme", $id_filme);
    $stmt->bindParam(":comentario", $comentario);

    $stmt->execute();

}


// LISTAR COMENTÁRIOS
function listar_comentarios($conexao, $id_filme)
{
    $sql = "SELECT comentarios.id_comentario,
                   comentarios.comentario,
                   comentarios.data_comentario,
                   usuarios.email
            FROM comentarios
            INNER JOIN usuarios
            ON comentarios.id_usuario = usuarios.id_usuario
            WHERE comentarios.id_filme = :id_filme";

    $stmt = $conexao->prepare($sql);

    $stmt->bindParam(":id_filme", $id_filme);

    $stmt->execute();

    $comentarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($comentarios as $comentario) {

        echo "<hr>";

        echo "Usuário: " . $comentario['email'] . "<br>";
        echo "Comentário: " . $comentario['comentario'] . "<br>";
        echo "Data: " . $comentario['data_comentario'] . "<br>";

        echo "<a href='filme.php?id=" . $id_filme . "&excluir=" . $comentario['id_comentario'] . "'>Apagar</a>";
    }
}
// EXCLUIR COMENTÁRIO

function excluir_comentario($conexao, $id)
{
    $sql = "DELETE FROM comentarios WHERE id_comentario = :id";

    $stmt = $conexao->prepare($sql);

    $stmt->bindParam(":id", $id);

    $stmt->execute();

}

?>