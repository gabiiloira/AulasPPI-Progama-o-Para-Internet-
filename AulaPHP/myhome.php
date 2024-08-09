<?php
     session_start();

     if(!isset($_SESSION['userid'])){
       header("Location:login.html");
    }

    include_once("da_uer.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> Bem Vindo <?php echo $_SESSION['userid']; ?> <h2>
    <?php echo selectUser($_SESSION['userid'])['nome']; ?>
    <a href="sair.php">Sair</a>
</body>
</html>