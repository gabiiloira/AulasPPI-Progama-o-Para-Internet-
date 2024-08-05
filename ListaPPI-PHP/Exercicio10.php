<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hora Atual do Sistema</title>
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

        p {
            font-size: 24px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Hora Atual do Sistema</h1>
    <?php
        date_default_timezone_set('America/Sao_Paulo'); // Ajuste o fuso horário conforme necessário
        $horaAtual = date('H:i:s');
        echo "<p>A hora atual
