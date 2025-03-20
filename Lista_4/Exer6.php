<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arredondamento de Número</title>
</head>
<body>
    <h2>Digite um número de ponto flutuante para arredondar:</h2>
    <form method="POST" action="">
        <label for="numero">Número:</label>
        <input type="number" step="0.01" name="numero" required>
        <input type="submit" value="Arredondar">
    </form>

<?php
// Função para arredondar o número
function arredondarNumero($numero) {
    // Usando a função round() para arredondar o número
    return round($numero);
}

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera o número enviado pelo formulário
    $numero = $_POST['numero'];
    
    // Chama a função para arredondar o número
    $numeroArredondado = arredondarNumero($numero);
    
    echo "Número original: " . $numero . "<br>";
    echo "Número arredondado: " . $numeroArredondado;
}
?>
</body>
</html>