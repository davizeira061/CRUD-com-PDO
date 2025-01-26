# A pasta Kane-Chan-Dev estou aprimorando CRUD em PHP com PDO
[Link da Playlist](https://www.youtube.com/watch?v=R19QXNzY504&list=PLXbKgo5jPQE-hiDPpimuEU_VmrXfnvD65)


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

### Aula: Como fazer um CRUP PHP SELECT? - Parte 04
Foi mostrado como fazer a visualização dos itens e como espeficicar o id no link.
~~~php
<?php
$lista = [];
$sql = $pdo->query("SELECT * FROM usuario");
if ($sql->rowCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>
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
~~~