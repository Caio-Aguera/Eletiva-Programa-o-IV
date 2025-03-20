<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contagem Regressiva</title>
</head>
<body>

    <h1>Formulário para Contagem Regressiva</h1>

    <!-- Formulário para receber o número -->
    <form method="POST">
        <label for="numero">Informe um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Verifica se o número foi informado
        $numero = intval($_POST['numero']);
        
        // Verifica se o número é maior que 0
        if ($numero > 0) {
            echo "<h2>Contagem regressiva a partir de $numero:</h2>";

            // Inicia o loop do-while para a contagem regressiva
            do {
                echo $numero . "<br>";
                $numero--;
            } while ($numero > 0);
        } else {
            echo "<p>Por favor, insira um número maior que 0.</p>";
        }
    }
    ?>
</body>
</html>