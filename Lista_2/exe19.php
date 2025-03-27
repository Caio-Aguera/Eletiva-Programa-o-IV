<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de Dias</title>
</head>
<body>

    <h1>Conversão de Dias em Horas, Minutos e Segundos</h1>

    <!-- Formulário para capturar o valor em dias -->
    <form method="POST" action="">
        <label for="dias">Valor em Dias: </label>
        <input type="number" id="dias" name="dias" step="1" required>

        <input type="submit" value="Converter">
    </form>

    <?php
        // Verifica se os dados do formulário foram enviados
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Recebe o valor em dias
            $dias = $_POST['dias'];

            // Converte dias em horas, minutos e segundos
            $horas = $dias * 24;
            $minutos = $horas * 60;
            $segundos = $minutos * 60;

            // Exibe o resultado
            echo "<h3>Resultado da Conversão:</h3>";
            echo "$dias dia(s) equivalem a:<br>";
            echo "$horas hora(s)<br>";
            echo "$minutos minuto(s)<br>";
            echo "$segundos segundo(s)<br>";
        }
    ?>
</body>
</html>