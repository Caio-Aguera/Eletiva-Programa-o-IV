<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menor Valor</title>
</head>
<body>
<?php
// Cria um array para armazenar os 7 números
$numeros = array();

// Lê os 7 números do usuário
for ($i = 0; $i < 7; $i++) {
    echo "Digite o " . ($i + 1) . "º número: ";
    $numeros[$i] = intval(fgets(STDIN));
}

// Inicializa o menor valor e a posição
$menorValor = $numeros[0];
$posicaoMenor = 0;

// Percorre o array para encontrar o menor valor e sua posição
for ($i = 1; $i < 7; $i++) {
    if ($numeros[$i] < $menorValor) {
        $menorValor = $numeros[$i];
        $posicaoMenor = $i;
    }
}

// Imprime o menor valor e sua posição
echo "O menor valor é: $menorValor\n";
echo "A posição do menor valor na sequência é: " . ($posicaoMenor + 1) . "\n"; 
?>
</body>
</html>