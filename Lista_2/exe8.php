<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Área do Retângulo</title>
</head>
<body>
    <h1>Calcule a Área do Retângulo</h1>

    <form action="calcular_area.php" method="POST">
        <label for="largura">Largura (em cm): </label>
        <input type="number" name="largura" id="largura" required>

        <label for="altura">Altura (em cm): </label>
        <input type="number" name="altura" id="altura" required>

        <input type="submit" value="Calcular">
    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletar os dados do formulário
    $largura = $_POST['largura'];
    $altura = $_POST['altura'];

    // Validar se os valores são numéricos e positivos
    if (is_numeric($largura) && is_numeric($altura) && $largura > 0 && $altura > 0) {
        // Calcular a área do retângulo
        $area = $largura * $altura;

        // Exibir o resultado
        echo "<h1>A área do retângulo é: " . $area . " cm²</h1>";
    } else {
        echo "<h1>Por favor, insira valores válidos e positivos para a largura e a altura.</h1>";
    }
} else {
    echo "<h1>Por favor, preencha o formulário corretamente.</h1>";
}
?>
</body>
</html>