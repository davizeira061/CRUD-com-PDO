# CRUD-com-PDO
 Aprendendo CRUD com PDO

### A pasta Kane-Chan-Dev estou aprimorando CRUD em PHP com PDO
[Link da Playlist](https://www.youtube.com/watch?v=R19QXNzY504&list=PLXbKgo5jPQE-hiDPpimuEU_VmrXfnvD65)

### Conexão com banco usando PDO:
~~~php
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
~~~

### Conexão com banco usando PDO (forma mais usada)
~~~php
$host = 'localhost'; // Ou o host do seu banco de dados
$dbname = 'nome_do_banco'; // Nome do banco de dados
$username = 'usuario'; // Seu nome de usuário do banco
$password = 'senha'; // Sua senha do banco

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    echo "Erro ao conectar: " . $e->getMessage();
}
~~~
>O que é o try e o catch?
>try: O bloco try contém o código que você deseja executar, mas que pode lançar um erro ou exceção. No caso da conexão com o banco de dados, se a conexão falhar (por exemplo, se o nome do banco ou as credenciais estiverem errados), o PHP irá lançar uma exceção.

>catch: O bloco catch captura essa exceção. Quando o código dentro do try gera uma exceção, a execução do código é interrompida, e o fluxo do programa é transferido para o bloco catch, onde você pode tratar o erro, exibir uma mensagem ou fazer outra ação.

>O comando *$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);* configura o PDO para lançar uma exceção quando ocorrer um erro, ao invés de retornar um erro simples ou silencioso.

>O código dentro do catch será executado para "capturar" o erro. A variável $e (que é do tipo *PDOException*) contém informações sobre o erro.

>O método *$e->getMessage()* retorna uma descrição detalhada do erro, que é exibida ao usuário (ou pode ser registrada para depuração).
### Introdução a $SESSION
~~~html
<hr>
<a href="TiagoA.Silva/LOGIN_MYSQL_SESSIONS/">
~~~
Mostra como iniciar uma session, como validar e como finalizar.


