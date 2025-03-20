<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>

<?php
// Função para ordenar o mapa por nome dos produtos
function ordenarPorNome($a, $b) {
    return strcmp($a['nome'], $b['nome']);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $produtos = [];

    // Lendo os dados dos produtos
    for ($i = 0; $i < 5; $i++) {
        $codigo = $_POST['codigo'][$i];
        $nome = $_POST['nome'][$i];
        $preco = $_POST['preco'][$i];

        // Se o preço for maior que 100, aplica 10% de desconto
        if ($preco > 100) {
            $preco *= 0.9;  // Aplica o desconto
        }

        // Armazenando os dados no mapa com o código como chave
        $produtos[$codigo] = [
            'nome' => $nome,
            'preco' => $preco
        ];
    }

    // Ordena o mapa pelos nomes dos produtos
    uasort($produtos, 'ordenarPorNome');
}

?>
</body>
</html>