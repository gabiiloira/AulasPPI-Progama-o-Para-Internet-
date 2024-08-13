<?php
   include_once("connection.php");

   function insertUser($nome, $email, $senha, $data_nascimento){
    $pdo=connection();
    $sql="INSERT INTO users (nome, email, senha, data_nascimento) VALUES(:nome,:email,:senha,:dtnasc)";

    $stmt $pdp->prepare($sql); 
    $stmt->execute( array(':nome'=>$nome, ':email'=>$email, ':senha'=>$senha, ':dtnasc'=>$data_nascimento));
    return $pdo->lastInsertId();
   }

   function selectAllUsers(){
      $pdo=connection();
      $sql="SELECT * FROM users";
      $stmt =$pdo->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll();
  }

  function selectUser($id){
      $pdo=connection();
      $sql="SELECT * FROM users WHERE id=:id";
      $stmt =$pdo->prepare($sql);
      $stmt->execute( Array(':id'=>$id));
      return $stmt->fetchAll(PDO::FETCH_ASSOC)[0];
  }

  function checkUser($email, $senha){
      $pdo=connection();
      $sql="SELECT * FROM users WHERE users.email=:email AND users.senha=:senha";
      $stmt =$pdo->prepare($sql);
      $stmt->execute( Array(':email'=>$email, ':senha'=>$senha));
      return $stmt->fetchAll(PDO::FETCH_ASSOC)[0];
  }
?>