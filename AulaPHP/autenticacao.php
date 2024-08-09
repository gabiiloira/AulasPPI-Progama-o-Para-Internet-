<?php
   include_once("da_uer.php");

   if(isset($_POST['email']) && !isset($_POST['senha'])){
    echo"
        <script>
        window.alert('Informe login e senha');
        window.location.href='login.html'
        </script>";
        exit();
   }

   $usr=checkUser($_POST['email'], $_POST['senha']);
   if(count($usr)==0){
    echo "login e senha invalidos";
   } else{

    echo "login e senha ok";
    session_star();
    //print_r($usr[0]["id"]);
    //var_dump($usr[0]["id"]);
    $usr=$usr[0];
    $_SESSION['userid']=$usr["id"];
    header("Location:myhome.php");
   }


?>