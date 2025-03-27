<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Metros para Centímetros</title>
</head>
<body>
    <h1>Conversor de Metros para Centímetros</h1>

    <!-- Formulário para o usuário inserir o valor em metros -->
    <form method="post" action="">
        <label for="metros">Valor em Metros:</label>
        <input type="number" id="metros" name="metros" step="any" required>

        <input type="submit" value="Converter">
    </form>

    <?php
    // Verifica se o valor foi enviado pelo formulário
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Obtém o valor inserido pelo usuário em metros
        $metros = $_POST['metros'];

        // Converte metros para centímetros
        $centimetros = $metros * 100;

        // Exibe o resultado
        echo "<h2>Resultado: $metros metros é igual a $centimetros centímetros</h2>";
    }
    ?>
</body>
</html>