<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mês Correspondente</title>
</head>
<body>
    <h1>Descubra o Mês</h1>
    <form method="POST" action="">
        <label for="numero">Informe um número entre 1 e 12:</label>
        <input type="number" id="numero" name="numero" min="1" max="12" required>
        <br><br>
        <button type="submit">Verificar Mês</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = intval($_POST["numero"]);
        
        $meses = [
            1 => "Janeiro",
            2 => "Fevereiro",
            3 => "Março",
            4 => "Abril",
            5 => "Maio",
            6 => "Junho",
            7 => "Julho",
            8 => "Agosto",
            9 => "Setembro",
            10 => "Outubro",
            11 => "Novembro",
            12 => "Dezembro"
        ];

        if ($numero >= 1 && $numero <= 12) {
            echo "<p>O mês correspondente ao número $numero é " . $meses[$numero] . ".</p>";
        } else {
            echo "<p>Não existe mês com o número $numero.</p>";
        }
    }
    ?>
</body>
</html>
