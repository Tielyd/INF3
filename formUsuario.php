<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>
</head>
<body>
    <form name="formUsuario" action="actionUsuario.php" method="POST">

        <label for="nomeUsuario">Nome:</label><br>
        <input name="nomeUsuario" type = "text"><br><br>

        <label for="emailUsuario">Email:</label><br>
        <input name="emailUsuario" type = "email"><br><br>

        <label for="senhaUsuario">Senha:</label><br>
        <input name="senhaUsuario" type = "password"><br><br>

        <label for="confirmarSenhaUsuario">Confirmar Senha:</label><br>
        <input name="confirmarSenhaUsuario" type = "password"><br><br>

        <button name="btCadastrar" type="submit">Cadastrar</button>

    </form>
</body>
</html>