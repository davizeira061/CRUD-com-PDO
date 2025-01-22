<?php
    // require 'db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Cadastrar Usuário</h1>
    <form method="POST" action="cadastrar_action.php">
        <label for="nome">Nome:
            <input type="text" name="nome">
        </label>
        <label for="email">Email:
            <input type="email" name="email">
        </label>
        <label for="senha">Senha:
            <input type="senha" name="senha">
        </label>
        <input type="submit" value="Salvar">
    </form>
    <a href="index.php">Voltar</a>
</body>

</html>