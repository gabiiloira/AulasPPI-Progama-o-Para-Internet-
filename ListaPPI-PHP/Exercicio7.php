<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classificação do Triângulo</title>
</head>
<body>
    <h1>Classificação do Triângulo</h1>
    <form method="POST" action="">
        <label for="lado1">Informe o primeiro lado:</label>
        <input type="number" id="lado1" name="lado1" required>
        <br><br>
        <label for="lado2">Informe o segundo lado:</label>
        <input type="number" id="lado2" name="lado2" required>
        <br><br>
        <label for="lado3">Informe o terceiro lado:</label>
        <input type="number" id="lado3" name="lado3" required>
        <br><br>
        <button type="submit">Classificar Triângulo</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lado1 = floatval($_POST["lado1"]);
        $lado2 = floatval($_POST["lado2"]);
        $lado3 = floatval($_POST["lado3"]);

        if ($lado1 + $lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 > $lado1) {
            if ($lado1 == $lado2 && $lado2 == $lado3) {
                echo "<p>Triângulo Equilátero: Todos os lados são iguais.</p>";
            } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
                echo "<p>Triângulo Isósceles: Dois lados são iguais.</p>";
            } else {
                echo "<p>Triângulo Escaleno: Todos os lados são diferentes.</p>";
            }
        } else {
            echo "<p>Os valores fornecidos não podem formar um triângulo.</p>";
        }
    }
    ?>
</body>
</html>
