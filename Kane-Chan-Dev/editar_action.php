<?php

require 'db.php';

$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha');

if ($id && $nome && $email && $senha) {
    $sql = $pdo->prepare("UPDATE usuario SET nome = :nome, email = :email, senha = :senha WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':senha', $senha);
    $sql->execute();

    header('Location: index.php');
    exit;
} else {
    // header('Location: index.php');
    // exit;
    echo 'teste';
}