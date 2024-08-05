<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo IMC - Página 3</title>
</head>
<body>
    <h1>Calculo IMC - Página 3</h1>
    <?php
    if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['peso']) && isset($_POST['altura'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $peso = floatval($_POST['peso']);
        $altura = floatval($_POST['altura']);
        
        $imc = $peso / ($altura * $altura);
        $imc_formatado = number_format($imc, 2);

        echo "<p>Nome: " . htmlspecialchars($nome) . "</p>";
        echo "<p>E-mail: " . htmlspecialchars($email) . "</p>";
        echo "<p>Peso: " . htmlspecialchars($peso) . " kg</p>";
        echo "<p>Altura: " . htmlspecialchars($altura) . " m</p>";
        echo "<p>IMC: " . $imc_formatado . "</p>";
    } else {
        echo "<p>Dados não fornecidos corretamente.</p>";
    }
    ?>
</body>
</html>
