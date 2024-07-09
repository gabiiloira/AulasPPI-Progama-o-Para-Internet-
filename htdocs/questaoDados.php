<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dado do cadastro</h1>
    <span>Nome:</sapan> <?php echo($_GET["nome"])?>
    <span>Idade:</sapan> <?php echo($_GET["idade"])?>

<form action="" method="get">

    <label for="peso"></label>
    <input type="text" name="peso" id="inputpeso">

    <label for="altura"></label>
    <input type="text" name="altura" id="inputaltura">

    <input type="submit">

   </form>
    </body>
</html>