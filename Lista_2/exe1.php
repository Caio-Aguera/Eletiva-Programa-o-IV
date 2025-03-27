<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de Números</title>
</head>
<body>

    <h2>Insira dois números para somar</h2>
    
    <!-- Formulário para inserir os números -->
    <form method="POST" action="">
        <label for="numero1">Número 1:</label>
        <input type="number" name="numero1" id="numero1" required>

        <label for="numero2">Número 2:</label>
        <input type="number" name="numero2" id="numero2" required>

        <input type="submit" value="Somar">
    </form>

    <?php
    // Exibe o resultado se os números foram inseridos e somados
    if (isset($resultado)) {
        echo "<h3>Resultado: $resultado</h3>";
    }
    ?>

<?php
// Verifica se os números foram enviados via POST
if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];

    // Realiza a soma
    $resultado = $numero1 + $numero2;
}
?>
</body>
</html>