<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de Temperatura</title>
</head>
<body>
    <h1>Conversão de Temperatura de Fahrenheit para Celsius</h1>
    
    <!-- Formulário para inserção da temperatura em Fahrenheit -->
    <form method="post" action="">
        <label for="fahrenheit">Temperatura em Fahrenheit:</label>
        <input type="number" name="fahrenheit" id="fahrenheit" required>
        <input type="submit" value="Converter">
    </form>

    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recebe a temperatura em Fahrenheit do formulário
        $fahrenheit = $_POST['fahrenheit'];

        // Converte Fahrenheit para Celsius
        $celsius = ($fahrenheit - 32) * 5 / 9;

        // Exibe o resultado
        echo "<h2>Temperatura em Celsius: " . number_format($celsius, 2) . "°C</h2>";
    }
    ?>
</body>
</html>