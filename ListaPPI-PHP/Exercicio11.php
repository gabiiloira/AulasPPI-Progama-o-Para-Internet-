<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto de Matrizes 3x3</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
            text-align: center;
        }

        table {
            margin: 0 auto;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        input {
            width: 50px;
            text-align: center;
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
    </style>
</head>
<body>
    <h1>Produto de Matrizes 3x3</h1>
    <form method="POST" action="">
        <h2>Matriz 1</h2>
        <table>
            <?php for ($i = 0; $i < 3; $i++): ?>
                <tr>
                    <?php for ($j = 0; $j < 3; $j++): ?>
                        <td><input type="number" name="matriz1[<?php echo $i; ?>][<?php echo $j; ?>]" required></td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>

        <h2>Matriz 2</h2>
        <table>
            <?php for ($i = 0; $i < 3; $i++): ?>
                <tr>
                    <?php for ($j = 0; $j < 3; $j++): ?>
                        <td><input type="number" name="matriz2[<?php echo $i; ?>][<?php echo $j; ?>]" required></td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>
        
        <br>
        <button type="submit">Calcular Produto</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Leitura das matrizes
        $matriz1 = $_POST['matriz1'];
        $matriz2 = $_POST['matriz2'];

        // Inicialização da matriz resultado
        $resultado = array_fill(0, 3, array_fill(0, 3, 0));

        // Cálculo do produto das matrizes
        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 3; $j++) {
                for ($k = 0; $k < 3; $k++) {
                    $resultado[$i][$j] += $matriz1[$i][$k] * $matriz2[$k][$j];
                }
            }
        }

        // Exibição da matriz resultado
        echo "<h2>Produto das Matrizes</h2>";
        echo "<table>";
        for ($i = 0; $i < 3; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 3; $j++) {
                echo "<td>" . $resultado[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>
