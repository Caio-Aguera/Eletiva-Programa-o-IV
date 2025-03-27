<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Potência</title>
</head>
<body>
    <h1>Calculadora de Potência</h1>

    <!-- Formulário para o usuário inserir a base e o expoente -->
    <form method="post" action="">
        <label for="base">Base:</label>
        <input type="number" id="base" name="base" required>

        <label for="expoente">Expoente:</label>
        <input type="number" id="expoente" name="expoente" required>

        <input type="submit" value="Calcular">
    </form>

    <?php
    // Verifica se os valores foram enviados pelo formulário
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Obtém os valores inseridos pelo usuário
        $base = $_POST['base'];
        $expoente = $_POST['expoente'];

        // Calcula a base elevada ao expoente
        $resultado = pow($base, $expoente);

        // Exibe o resultado
        echo "<h2>Resultado: $base elevado a $expoente é $resultado</h2>";
    }
    ?>
</body>
</html>