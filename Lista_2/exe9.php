<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Área do Círculo</title>
</head>
<body>

<h2>Calcule a Área do Círculo</h2>

<!-- Formulário para o usuário inserir o raio -->
<form method="POST">
    <label for="raio">Raio do círculo:</label>
    <input type="number" id="raio" name="raio" step="any" required>
    <button type="submit">Calcular</button>
</form>

<?php
// Verifica se o formulário foi enviado e se o valor do raio foi inserido
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['raio'])) {
    // Obtém o valor do raio do formulário
    $raio = $_POST['raio'];

    // Verifica se o valor do raio é válido (positivo)
    if ($raio > 0) {
        // Calcula a área do círculo (π * r²)
        $area = pi() * pow($raio, 2);

        // Exibe o resultado
        echo "<h3>A área do círculo com raio {$raio} é: " . number_format($area, 2, ',', '.') . " unidades quadradas.</h3>";
    } else {
        // Caso o raio seja inválido
        echo "<h3>Por favor, insira um valor válido para o raio (maior que zero).</h3>";
    }
}
?>
</body>
</html>