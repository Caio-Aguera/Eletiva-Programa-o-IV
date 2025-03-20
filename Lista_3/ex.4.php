<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desconto Produto</title>
</head>
<body>
<?php
// Solicita ao usuário o valor do produto
echo "Informe o valor do produto: R$";
$valorProduto = floatval(fgets(STDIN));

// Verifica se o valor é superior a R$100,00
if ($valorProduto > 100) {
    // Aplica um desconto de 15%
    $desconto = 0.15 * $valorProduto;
    $novoValor = $valorProduto - $desconto;

    // Exibe o novo valor após o desconto
    echo "O valor do produto após o desconto de 15% é: R$" . number_format($novoValor, 2, ',', '.') . "\n";
} else {
    // Caso o valor seja menor ou igual a R$100, não aplica desconto
    echo "O valor do produto é R$" . number_format($valorProduto, 2, ',', '.') . " e não há desconto.\n";
}
?>
</body>
</html>