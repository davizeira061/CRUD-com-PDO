<?php
session_start();

if (!isset($_SESSION["usuario_logado"]))
    header("Location: login.php");

if (isset($_GET["sair"])) {
    unset($_SESSION["usuario_logado"]);
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
</head>
<body>
    <div class="container">
        <h1>Bem vindo, você entrou na SESSION corretamente!</h1>
        <div>
            <a href="index.php?sair=true">Sair</a>
        </div>
    </div>
</body>
</html>