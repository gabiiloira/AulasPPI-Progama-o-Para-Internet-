<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body,fieldset,form{
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div id="boxmain">
    <form action="autenticacao.php" method="post">
            <fieldset>
                <h2>Login</h2>
                <label for="email"> Email</label>
                <input type="text" name="email" id="email">

                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha">

                <input type="submit" value="Entrar">
            </fieldset>
    </form>

    <a href="registrar_user.php"><p>Registrar novo Usuário</p></a>
    </div>
</body>
</html>