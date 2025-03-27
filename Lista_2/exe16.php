<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Preço com Desconto</title>
</head>
<body>
    <h2>Calculadora de Preço com Desconto</h2>
    
    <!-- Formulário para o usuário inserir os dados -->
    <form method="POST" action="">
        <label for="preco">Preço Original (R$):</label>
        <input type="number" step="0.01" id="preco" name="preco" required>

        <label for="desconto">Percentual de Desconto (%):</label>
        <input type="number" step="0.01" id="desconto" name="desconto" required>

        <input type="submit" value="Calcular">
    </form>

    <?php
    // PHP - Processamento do formulário
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém os valores do formulário
        $preco = $_POST['preco'];
        $desconto = $_POST['desconto'];
        
        // Verifica se os valores são válidos
        if (is_numeric($preco) && is_numeric($desconto) && $preco >= 0 && $desconto >= 0) {
            // Calcula o preço com desconto
            $valor_desconto = ($desconto / 100) * $preco;
            $preco_com_desconto = $preco - $valor_desconto;
        } else {
            $erro = "Por favor, insira valores válidos para o preço e o desconto.";
        }
    }

    // Exibe o resultado ou erro se houver
    if (isset($preco_com_desconto)) {
        echo "<h3>Preço com Desconto:</h3>";
        echo "<p>Preço original: R$ " . number_format($preco, 2, ',', '.') . "</p>";
        echo "<p>Desconto de " . number_format($desconto, 2, ',', '.') . "%</p>";
        echo "<p>Preço com desconto: R$ " . number_format($preco_com_desconto, 2, ',', '.') . "</p>";
    }

    if (isset($erro)) {
        echo "<p style='color: red;'>$erro</p>";
    }
    ?>
</body>
</html>