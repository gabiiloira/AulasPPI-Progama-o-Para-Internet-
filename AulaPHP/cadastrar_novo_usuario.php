<?php
    include_once "da_user";


    if(isset($_POST['nome']) || isset($_POST['email']) || !isset($_POST['senha']) || !sset($_POST['datansc'])){
        header("Location:login.php?erro=2");
    }

    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $data_nascimento=$_POST['datansc'];


    if(insertUser($nome, $email, $senha, $data_nascimento) >0){
        header("Location:regsitrar_user.php?ok=1");
    }

?>