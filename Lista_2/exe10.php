<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora do Perímetro do Retângulo</title>
</head>
<body>
    <h1>Calculadora do Perímetro do Retângulo</h1>
    
    <!-- Formulário para o usuário inserir largura e altura -->
    <form method="POST">
        <label for="largura">Largura:</label>
        <input type="number" name="largura" id="largura" required>

        <label for="altura">Altura:</label>
        <input type="number" name="altura" id="altura" required>

        <input type="submit" value="Calcular Perímetro">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Recebe os dados do formulário
        $largura = $_POST['largura'];
        $altura = $_POST['altura'];

        // Calcula o perímetro do retângulo
        $perimetro = 2 * ($largura + $altura);

        // Exibe o resultado
        echo "<h2>O perímetro do retângulo é: " . $perimetro . " unidades.</h2>";
    }
    ?>
</body>
</html>