<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Velocidade Média</title>
</head>
<body>

    <h1>Cálculo da Velocidade Média</h1>

    <!-- Formulário para capturar a distância e o tempo -->
    <form method="POST" action="">
        <label for="distancia">Distância (km): </label>
        <input type="number" id="distancia" name="distancia" step="0.01" required>

        <label for="tempo">Tempo (horas): </label>
        <input type="number" id="tempo" name="tempo" step="0.01" required>

        <input type="submit" value="Calcular">
    </form>

    <?php
        // Verifica se os dados do formulário foram enviados
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Recebe os valores do formulário
            $distancia = $_POST['distancia'];
            $tempo = $_POST['tempo'];

            // Verifica se o tempo é maior que zero para evitar divisão por zero
            if ($tempo > 0) {
                // Calcula a velocidade média
                $velocidade = $distancia / $tempo;

                // Exibe o resultado
                echo "<h3>Resultado:</h3>";
                echo "Distância: " . number_format($distancia, 2, ',', '.') . " km<br>";
                echo "Tempo: " . number_format($tempo, 2, ',', '.') . " horas<br>";
                echo "Velocidade Média: " . number_format($velocidade, 2, ',', '.') . " km/h<br>";
            } else {
                echo "<h3>Erro:</h3>";
                echo "O tempo deve ser maior que zero para calcular a velocidade média.<br>";
            }
        }
    ?>
</body>
</html>