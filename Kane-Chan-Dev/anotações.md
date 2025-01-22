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

### Aula: Como não permitir cadastro de email duplicado ao fazer INSERT no CRUD PHP - Parte 03
Foi mostrado como fazer uma validação no bando para não inserir itens duplicados.
Usamos o arquivo cadastrar_action.php onde usamos o comando if else para verificar se já existia o email inserido, caso exista, execute o else.