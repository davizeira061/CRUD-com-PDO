<?php
$host = 'localhost'; // Ou o host do seu banco de dados
$dbname = 'crud-pdo-kane_chan_dev'; // Nome do banco de dados
$username = 'root'; // Seu nome de usuário do banco
$password = ''; // Sua senha do banco


try {
    // Conexão com o banco de dados
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    echo "Erro ao conectar: " . $e->getMessage();
}

// Consulta ao banco de dados
// $sql = $pdo->query('SELECT * FROM usuario');

// Buscar todos os dados
// $dados = $sql->fetchAll();

// Melhora a vizualização:
// $dados = $sql->fetchAll(pdo::FETCH_ASSOC);

// echo '<pre>';
// print_r($dados);
