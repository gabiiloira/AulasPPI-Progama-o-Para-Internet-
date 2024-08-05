<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intervalo de Números</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Intervalo de Números</h1>
    <form method="POST" action="">
        <label for="numero1">Informe o primeiro número:</label>
        <input type="number" id="numero1" name="numero1" required>
        <br><br>
        <label for="numero2">Informe o segundo número:</label>
        <input type="number" id="numero2" name="numero2" required>
        <br><br>
        <button type="submit">Exibir Intervalo</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = intval($_POST["numero1"]);
        $numero2 = intval($_POST["numero2"]);

        if ($numero1 > $numero2) {
            $temp = $numero1;
            $numero1 = $numero2;
            $numero2 = $temp;
        }

        echo "<h2>Números no intervalo de $numero1 a $numero2</h2>";
        for ($i = $numero1; $i <= $numero2; $i++) {
            echo "<span class='numero'>$i</span> ";
        }
    }
    ?>
</body>
</html>
