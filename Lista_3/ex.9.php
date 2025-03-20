<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Fatorial</title>
</head>
<body>
    <h1>Calcular Fatorial</h1>
    <form method="POST" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <input type="submit" value="Calcular">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém o número informado pelo usuário
    $numero = (int)$_POST['numero'];
    
    // Função para calcular o fatorial usando um loop for
    $fatorial = 1;
    for ($i = 1; $i <= $numero; $i++) {
        $fatorial *= $i;
    }
    
    // Exibe o resultado
    echo "<h3>O fatorial de $numero é: $fatorial</h3>";
}
?>
</body>
</html>