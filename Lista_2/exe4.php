<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisão de Números</title>
</head>
<body>

    <h2>Divisão de Números</h2>

    <!-- Formulário para inserção dos números -->
    <form method="post">
        <label for="num1">Primeiro número:</label>
        <input type="number" id="num1" name="num1" required>

        <label for="num2">Segundo número:</label>
        <input type="number" id="num2" name="num2" required>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém os números inseridos
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        // Verifica se o segundo número é zero para evitar divisão por zero
        if ($num2 == 0) {
            echo "<p style='color: red;'>Erro: Não é possível dividir por zero!</p>";
        } else {
            // Realiza a divisão
            $resultado = $num1 / $num2;
            echo "<p>Resultado: $num1 ÷ $num2 = $resultado</p>";
        }
    }
    ?>
</body>
</html>