<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Quilômetros para Milhas</title>
</head>
<body>
    <h1>Conversor de Quilômetros para Milhas</h1>

    <!-- Formulário para o usuário inserir o valor em quilômetros -->
    <form method="post" action="">
        <label for="km">Valor em Quilômetros:</label>
        <input type="number" id="km" name="km" step="any" required>

        <input type="submit" value="Converter">
    </form>

    <?php
    // Verifica se o valor foi enviado pelo formulário
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Obtém o valor inserido pelo usuário em quilômetros
        $km = $_POST['km'];

        // Conversão de quilômetros para milhas (1 km = 0.621371 milhas)
        $milhas = $km * 0.621371;

        // Exibe o resultado
        echo "<h2>Resultado: $km quilômetros é igual a $milhas milhas</h2>";
    }
    ?>
</body>
</html>