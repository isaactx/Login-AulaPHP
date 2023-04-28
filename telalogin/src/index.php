<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login:</h1>
    <form method="POST" action="main.php">
        <label for="nome">Usuário: </label>
        <input name="nome" type="text">
        <br>
        <label for="pass">Senha: </label>
        <input type="password" name="pass"require>
        <br>
        <input type="submit" value="Enviar" name="btnSubmitInsertTaskForm">
    </form>
</body>
</html>