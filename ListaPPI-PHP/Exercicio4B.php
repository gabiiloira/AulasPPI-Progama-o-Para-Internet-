<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo IMC - Página 2</title>
</head>
<body>
    <h1>Calculo IMC - Página 2</h1>
    <?php
    if (isset($_GET['nome']) && isset($_GET['email'])) {
        $nome = $_GET['nome'];
        $email = $_GET['email'];
    } else {
        echo "<p>Dados não fornecidos corretamente.</p>";
        exit;
    }
    ?>
    <form method="POST" action="pagina3.php">
        <input type="hidden" name="nome" value="<?php echo htmlspecialchars($nome); ?>">
        <input type="hidden" name="email" value="<?php echo htmlspecialchars($email); ?>">
        <label for="peso">Peso (kg):</label>
        <input type="number" step="0.01" id="peso" name="peso" required>
        <br><br>
        <label for="altura">Altura (m):</label>
        <input type="number" step="0.01" id="altura" name="altura" required>
        <br><br>
        <button type="submit">Calcular IMC</button>
    </form>
</body>
</html>
