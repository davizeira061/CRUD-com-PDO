<?php
require 'db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista do Banco</title>
</head>

<body>
    <h1>Lista de Usuários</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Senha</th>
        </tr>
    </table>
    <br>
    <a href="cadastrar.php">Cadastrar Usuário</a>
</body>

</html>