<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subtração de Números</title>
</head>
<body>
    <h1>Formulário de Subtração</h1>
    <form method="POST" action="">
        <label for="numero1">Primeiro número:</label>
        <input type="number" id="numero1" name="numero1" required>

        <label for="numero2">Segundo número:</label>
        <input type="number" id="numero2" name="numero2" required>

        <input type="submit" value="Subtrair">
    </form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtendo os números do formulário
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];

    // Realizando a subtração
    $resultado = $numero1 - $numero2;

    // Exibindo o resultado
    echo "<h2>Resultado da subtração: $resultado</h2>";
}
?>
</body>
</html>