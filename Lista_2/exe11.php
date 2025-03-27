<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Perímetro do Círculo</title>
</head>
<body>

    <h2>Calculadora de Perímetro do Círculo</h2>

    <!-- Formulário para o usuário inserir o raio -->
    <form action="" method="post">
        <label for="raio">Raio do círculo (em unidades):</label>
        <input type="number" name="raio" id="raio" step="any" required>
        <button type="submit">Calcular Perímetro</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtendo o valor do raio do formulário
            $raio = $_POST['raio'];

            // Verificando se o raio é um valor válido
            if ($raio > 0) {
                // Fórmula do perímetro do círculo: P = 2πr
                $perimetro = 2 * pi() * $raio;

                // Exibindo o resultado
                echo "<h3>O perímetro do círculo é: " . number_format($perimetro, 2) . " unidades.</h3>";
            } else {
                echo "<h3>Por favor, insira um valor válido para o raio.</h3>";
            }
        }
    ?>
</body>
</html>