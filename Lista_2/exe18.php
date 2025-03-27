<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Juros Compostos</title>
</head>
<body>

    <h1>Cálculo de Juros Compostos</h1>

    <!-- Formulário para capturar dados do usuário -->
    <form method="POST" action="">
        <label for="capital">Capital (R$): </label>
        <input type="number" id="capital" name="capital" step="0.01" required>

        <label for="taxa">Taxa de Juros (%): </label>
        <input type="number" id="taxa" name="taxa" step="0.01" required>

        <label for="periodo">Período (anos): </label>
        <input type="number" id="periodo" name="periodo" step="1" required>

        <input type="submit" value="Calcular">
    </form>

    <?php
        // Verifica se os dados do formulário foram enviados
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Recebe os valores do formulário
            $capital = $_POST['capital'];
            $taxa = $_POST['taxa'];
            $periodo = $_POST['periodo'];

            // Converte a taxa de juros de percentual para decimal
            $taxa_decimal = $taxa / 100;

            // Calcula o montante com juros compostos
            $montante = $capital * pow((1 + $taxa_decimal), $periodo);

            // Exibe o resultado
            echo "<h3>Resultado:</h3>";
            echo "Capital: R$ " . number_format($capital, 2, ',', '.') . "<br>";
            echo "Taxa de Juros: " . number_format($taxa, 2, ',', '.') . "%<br>";
            echo "Período: " . $periodo . " anos<br>";
            echo "Montante com Juros Compostos: R$ " . number_format($montante, 2, ',', '.') . "<br>";
        }
    ?>
</body>
</html>