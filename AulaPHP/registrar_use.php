<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div id="boxmain">
    <form action="cadastrar_novo_usuário.php" method="post">
        
            <label for="nome">Nome</label>
            <input id="nome" type="text" name="nome">

            <label for="email">Email</label>
            <input id="email" type="text" name="email">

            <label for="senha">Senha</label>
            <input id="senha" type="password" name="senha">

            <label for="datansc">Data Nascimento</label>
            <input id="datansc" type="text" name="datansc">

            <input type="submit" value="cadastrar novo usuário">
    </form>
    <div class="status">
        <?php
          if(isset($_GET['ok'])==1){
            <p class= "sucesso">Cadastro realizado com sucesso!</p>
            ?>
            <?php
          }
          ?>
    </div>
</div>
</body>
</html>