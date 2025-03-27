<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Juros Simples</title>
</head>
<body>

    <h1>Cálculo de Juros Simples</h1>

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

            // Calcula os juros simples
            $juros = $capital * ($taxa / 100) * $periodo;

            // Exibe o resultado
            echo "<h3>Resultado:</h3>";
            echo "Capital: R$ " . number_format($capital, 2, ',', '.') . "<br>";
            echo "Taxa de Juros: " . number_format($taxa, 2, ',', '.') . "%<br>";
            echo "Período: " . $periodo . " anos<br>";
            echo "Juros Simples: R$ " . number_format($juros, 2, ',', '.') . "<br>";
            echo "Total (Capital + Juros): R$ " . number_format($capital + $juros, 2, ',', '.') . "<br>";
        }
    ?>
</body>
</html>