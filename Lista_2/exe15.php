<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
</head>
<body>
    <h1>Calculadora de IMC (Índice de Massa Corporal)</h1>

    <!-- Formulário para o usuário inserir o peso e a altura -->
    <form method="post" action="">
        <label for="peso">Peso (em kg):</label>
        <input type="number" id="peso" name="peso" step="any" required>

        <label for="altura">Altura (em metros):</label>
        <input type="number" id="altura" name="altura" step="any" required>

        <input type="submit" value="Calcular IMC">
    </form>

    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Obtém os valores inseridos pelo usuário
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        // Calcula o IMC (Índice de Massa Corporal)
        $imc = $peso / ($altura * $altura);

        // Exibe o resultado do IMC
        echo "<h2>Resultado: Seu IMC é " . number_format($imc, 2) . "</h2>";

        // Exibe a classificação do IMC
        if ($imc < 18.5) {
            echo "<p>Classificação: Abaixo do peso</p>";
        } elseif ($imc >= 18.5 && $imc < 24.9) {
            echo "<p>Classificação: Peso normal</p>";
        } elseif ($imc >= 25 && $imc < 29.9) {
            echo "<p>Classificação: Sobrepeso</p>";
        } elseif ($imc >= 30 && $imc < 39.9) {
            echo "<p>Classificação: Obesidade</p>";
        } else {
            echo "<p>Classificação: Obesidade mórbida</p>";
        }
    }
    ?>
</body>
</html>