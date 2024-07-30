<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action=""  method="get">
    <label for="numero">Número da Tabuada</label>
    <input type="number" id="numero" name="n">
    <input type="submit" value="Gerar tabuada">
</form>

<?php
    if(isset ($_GET["n"])){
        exit;
    }
    $i=0;
    $n=$_GET["n"];

    for($i=0;$i<=10;$i++){
        $p=$n*$i;
        echo "<p>$n*$i=$p</p>";
    }
?>    
</body>
</html>