<?php
    include_once("da_user.php");

    if(connection()==null){
        echo "Erro na conexão";
    } else{
        echo "Conexão ok";
    }

    //insert user
    //echo "Insert <hr><br>";
    //echo "Id usr".insertUser("Pedro", "gabrieli.rb@aluno.ifsc.edu.br", "1234", "2020-10-10");

    // select users
    echo "Select all users <hr> <pre>";
    print_r(selectAllUsers());
    echo "</pre>";

    //select user 10
    echo "<br> <hr> Users 10 <pre>";
    print_r(selectAllUser(10));
    echo "</pre>";

    //check login e senha
    echo "<br> <hr> check login e senha <pre>";
    print_r(selectAllUser("gabrieli.rb@aluno.ifsc.edu.br", "123456"));
    echo "</pre>";
