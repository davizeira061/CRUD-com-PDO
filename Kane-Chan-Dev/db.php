<?php

$pdo = new PDO("mysql: dbname=crud-pdo-kane_chan_dev; host: localhost", "root", "");

$sql = $pdo->query('SELECT * FROM `crud-pdo-kane_chan_dev`.usuario');

$dados = $sql->fetchAll();
// Melhora a vizualização:
// $dados = $sql->fetchAll(pdo::FETCH_ASSOC);

echo '<pre>';
print_r($dados);
