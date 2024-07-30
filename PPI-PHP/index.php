<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="numero"> Informe o Número</label>
        <input type="number" name="numero" id="numero">
        <input type="submit" value="enviar">
    </form>

    <?php
        if(isset($_GET['numero']))
        {
            $result=true;
            if($_GET['numero']%2==0){
                $result=true;
            }
    ?>
        <h2> <?php echo $result;?> </h2>
    <?php
        }
    ?>
</body>
</html>