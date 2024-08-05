<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de Valores</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            font-size: 18px;
        }

        input {
            padding: 10px;
            margin: 10px 0;
            font-size: 16px;
            width: 300px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        p {
            font-size: 18px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Soma de Valores</h1>
    <form method="POST" action="">
        <label for="valores">Informe uma lista de valores separados por “;”:</label>
        <br>
        <input type="text" id="valores" name="valores" required>
        <br>
        <button type="submit">Calcular Soma</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valores = $_POST["valores"];
        $valoresArray = explode(";", $valores);

        $soma = 0;
        foreach ($valoresArray as $valor) {
            $soma += floatval($valor);
        }

        echo "<p>A soma dos valores é: $soma</p>";
    }
    ?>
</body>
</html>
