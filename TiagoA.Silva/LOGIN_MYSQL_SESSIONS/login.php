<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <div>
            <form method="POST" action="autenticador.php">
                <label for="">Usuário:
                    <input type="text" name="user">
                </label>
                <label for="">Senha:
                    <input type="password" name="senha">
                </label>
                <button type="submit">Entrar</button>
            </form>
        </div>
    </div>
</body>
</html>