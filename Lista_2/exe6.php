<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Temperatura</title>
</head>
<body>
    <h1>Conversão de Temperatura de Celsius para Fahrenheit</h1>
    
    <form method="POST">
        <label for="celsius">Temperatura em Celsius:</label>
        <input type="number" name="celsius" id="celsius" step="any" required>
        <input type="submit" value="Converter">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtendo o valor de Celsius do formulário
        $celsius = $_POST['celsius'];
        
        // Convertendo Celsius para Fahrenheit
        $fahrenheit = ($celsius * 9/5) + 32;

        // Exibindo o resultado
        echo "<h2>$celsius °C é igual a $fahrenheit °F</h2>";
    }
    ?>
</body>
</html>