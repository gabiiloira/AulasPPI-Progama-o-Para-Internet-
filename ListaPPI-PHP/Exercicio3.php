<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou Ímpar</title>
    <link rel="stylesheet" href="Ex3.css">
</head>
<body>
    <div class="container">
        <h1>Verifique se um número é Par ou Ímpar</h1>
        <form method="POST" action="">
            <label for="numero">Informe um número:</label>
            <input type="number" id="numero" name="numero" required>
            <button type="submit">Verificar</button>
        </form>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST["numero"];
            if (is_numeric($numero)) {
                if ($numero % 2 == 0) {
                    echo "<p>O número $numero é Par.</p>";
                } else {
                    echo "<p>O número $numero é Ímpar.</p>";
                }
            } else {
                echo "<p>Por favor, informe um número válido.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
