<?php
   include_once("connection.php");

   function insertUser($nome, $email, $senha, $data_nascimento){
    $pdo=connection();
    $sql="INSERT INTO users (nome, email, senha, data_nascimento) VALUES(:nome,:email,:senha,:dtnasc)";

    $stmt $pdp->prepare($sql); 
    $stmt->execute( array(':nome'=>$nome, ':email'=>$email, ':senha'=>$senha, ':dtnasc'=>$data_nascimento));
   }
?>