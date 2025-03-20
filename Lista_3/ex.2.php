<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma com triplo</title>
</head>
<body>
<?php
// Função para calcular a soma ou o triplo da soma se os valores forem iguais
function calcularSoma($a, $b) {
    if ($a == $b) {
        return 3 * ($a + $b); // Se os valores forem iguais, retorna o triplo da soma
    } else {
        return $a + $b; // Caso contrário, retorna apenas a soma
    }
}

// Exemplo de uso
$valor1 = 5; // Pode ser substituído por qualquer valor de entrada
$valor2 = 5; // Pode ser substituído por qualquer valor de entrada

$resultado = calcularSoma($valor1, $valor2);
echo "Resultado: " . $resultado; // Exibe o resultado
?>
</body>
</html>