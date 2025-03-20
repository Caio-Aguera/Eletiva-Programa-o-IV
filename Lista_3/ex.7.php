<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de Números</title>
</head>
<body>
    <h1>Informe um número para somar de 1 até o número informado</h1>
    <form method="POST" action="">
        <label for="numero">Número:</label>
        <input type="number" name="numero" id="numero" required>
        <input type="submit" value="Calcular">
    </form>
<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pega o número informado pelo usuário
    $numero = intval($_POST['numero']);

    // Inicializa a variável para a soma
    $soma = 0;
    $contador = 1;

    // Loop while para somar os números de 1 até o número informado
    while ($contador <= $numero) {
        $soma += $contador;
        $contador++;
    }
    
    // Exibe o resultado
    echo "<p>A soma de todos os números de 1 até $numero é: $soma</p>";
}
?>
</body>
</html>