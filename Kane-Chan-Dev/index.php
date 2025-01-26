<?php
require 'db.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM usuario");
if ($sql->rowCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
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
            <th>Ações</th>
        </tr>
        <?php foreach ($lista as $usuario): ?>
            <tr>
                <td><?=$usuario['id'];?></td>
                <td><?=$usuario['nome'];?></td>
                <td><?=$usuario['email'];?></td>
                <td><?=$usuario['senha'];?></td>
                <td>
                    <a href="editar.php?id=<?=$usuario['id'];?>">[EDITAR]</a>
                    <a href="excluir.php">[EXCLUIR]</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="cadastrar.php">Cadastrar Usuário</a>
</body>

</html>