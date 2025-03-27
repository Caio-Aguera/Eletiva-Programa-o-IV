<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplicação de Números</title>
</head>
<body>
    <h1>Multiplicação de Números</h1>

    <!-- Formulário para inserir os números -->
    <form method="post">
        <label for="numero1">Digite o primeiro número:</label>
        <input type="number" id="numero1" name="numero1" required>

        <label for="numero2">Digite o segundo número:</label>
        <input type="number" id="numero2" name="numero2" required>

        <input type="submit" value="Multiplicar">
    </form>

    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recebe os valores dos números
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];

        // Realiza a multiplicação
        $resultado = $numero1 * $numero2;

        // Exibe o resultado
        echo "<h2>Resultado: $numero1 x $numero2 = $resultado</h2>";
    }
    ?>
</body>
</html>