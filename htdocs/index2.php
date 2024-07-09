<form action = "http://localhost/index2.php">
    <input id="idvariavelA" type="text" name="varA" value = <?php 
    
    if(isset($_GET["varA"])){

        echo $_GET["varA"];
    }
    ?>
    >
    <input id="idvariavelB" type="text" name="varB" value = <?php
    
    if((isset($_GET["varB"]))){

        echo $_GET["varB"];
    }
    ?>
    >
    <input type="submit" value = "Submeter dados para o servidor">
  </form>
    <?php 
    if((isset($_GET["varA"])) && (isset($_GET["varB"]))){

        $a=$_GET["varA"];
        $b=$_GET["varB"];

       echo "Soma A+B=".$a+$b;
    }
    ?>
    