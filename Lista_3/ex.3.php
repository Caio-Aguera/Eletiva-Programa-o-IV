<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valores em ordem crescente</title>
</head>
<body>
<?php
// Recebe os valores A e B
$a = 5;  // Exemplo de valor para A
$b = 4;  // Exemplo de valor para B

// Verifica se os valores são iguais
if ($a == $b) {
    // Se forem iguais, imprime a mensagem informando os valores
    echo "Números iguais: $a";
} else {
    // Se forem diferentes, imprime os valores em ordem crescente
    if ($a < $b) {
        echo "$a $b";
    } else {
        echo "$b $a";
    }
}
?>
</body>
</html>