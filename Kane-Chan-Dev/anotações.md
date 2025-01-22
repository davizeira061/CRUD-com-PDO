Continuar aula: 3

### Conexão com banco usando PDO:

<?php 
<!-- // Conexão com o banco de dados -->
$pdo = new PDO("mysql:dbname=nome-do-seu-banco; host: localhost", "root", "");

<!-- // Consulta ao banco de dados -->
$sql = $pdo->query('SELECT * FROM tabela-que-deseja');

<!-- // Buscar todos os dados -->
$dados = $sql->fetchAll();
// Melhora a vizualização:
// $dados = $sql->fetchAll(pdo::FETCH_ASSOC);

<!-- // Exibir os dados -->
echo '<pre>';
print_r($dados);
?>

