<?php

require 'db.php';

$usuario = [];

$id = filter_input(INPUT_GET, 'id');

if ($id) {
    $sql = $pdo->prepare("SELECT * FROM usuario WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $usuario = $sql->fetch(PDO::FETCH_ASSOC);
    } else {
        header("Location: index.php");
        exit;
    }
} else {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuário</title>
</head>

<body>
    <div class="container">
        <h1>Editar Usuário</h1>
        <form method="POST" action="editar_action.php">
            <input type="hidden" name="id" value="<?= $usuario['id'] ?>;">
            <label for="nome">Nome:
                <input type="text" name="nome" value="<?= $usuario['nome']; ?>">
            </label>
            <label for="email">E-mail:
                <input type="text" name="email" value="<?= $usuario['email']; ?>">
            </label>
            <label for="senha">Senha:
                <input type="text" name="senha" value="<?= $usuario['senha']; ?>">
            </label>
            <button type="submit">Atualizar</button>
        </form>
    </div>
    <div>
        <a href="index.php">Voltar</a>
    </div>
</body>

</html>