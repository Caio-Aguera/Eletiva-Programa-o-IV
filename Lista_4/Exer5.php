<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Raiz Quadrada</title>
</head>
<body>
    <h1>Calculadora de Raiz Quadrada</h1>

    <!-- Formulário para o usuário inserir o número -->
    <form method="POST" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Calcular</button>
    </form>

<?php
// Função para calcular a raiz quadrada
function calcularRaizQuadrada($numero) {
    // Verificar se o número é negativo
    if ($numero < 0) {
        return "Erro: O número não pode ser negativo.";
    }

    // Calcular a raiz quadrada usando a função interna sqrt()
    return sqrt($numero);
}

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capturar o valor do formulário
    $valor = $_POST['numero'];

    // Chamar a função para calcular a raiz quadrada
    $resultado = calcularRaizQuadrada($valor);
}
?>
    <?php
    // Exibir o resultado se houver
    if (isset($resultado)) {
        echo "<p>A raiz quadrada de {$valor} é: {$resultado}</p>";
    }
    ?>
</body>
</html>