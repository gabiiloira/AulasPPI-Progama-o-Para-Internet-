  <form action = "http://localhost/index.php">
    <input id="idvariavelA" type="text" name="varA">
    <input id="idvariavelB" type="text" name="varB">
    <input type="submit" value = "Submeter dados para o servidor">
  </form>
    <?php 
    
    $a=$_GET["varA"];
    $b=$_GET["varB"];
    echo "Soma A+B=".$a+$b;
    
    ?>