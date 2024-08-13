<?php
     session_start();

     if(!isset($_SESSION['userid'])){
       header("Location:login.php");
       exit();
    }

    include_once "da_uer.php";
    $user=selectUser($_SESSION['userid']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>MyHome</title>
</head>
<body>
    <h2> Bem Vindo <?php echo $user['id']." - ".$user['nome']; ?> <h2>
    <div class="menu">
    <a href="sair.php">Sair</a>
    </div>
    <div id="boxmain">
        <h2>Lista de Usuarios</h2>
        <?php
           $users=selectAllUsers();
           //var_dump($users);

        ?>
    <table>
        <td>id </td>
        <td>nome </td>
        <td>email </td>
        <td>datanascimento </td>
    </tr>
    <?php
         foreach($users as $user){
    ?>
            <td><a href="editar_user.php?id=<?php echo $user['id']; ?>">
                <?php echo $user['id']; ?>
            </a>
         </td>
            <tr>
                <td><?php echo $user['id'];?>]</td>
                <td><?php echo $user['nome'];?>]</td>
                <td><?php echo $user['email'];?>]</td>
                <td><?php echo $user['datanascimento'];?>]</td>
           </tr>
   <?php
         }
    ?>
</table>
     </div>
</body>
</html>