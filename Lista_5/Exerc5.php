<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
</head>
<body>
    <h2>Cadastro de Livros</h2>
    <form method="POST">
    <?php for ($i = 1; $i <= 5; $i++): ?>
        <h3>Livro <?php echo $i; ?></h3>
        <label for="titulo<?php echo $i; ?>">Título:</label>
        <input type="text" name="titulo<?php echo $i; ?>" required>
        <label for="quantidade<?php echo $i; ?>">Quantidade em Estoque:</label>
        <input type="number" name="quantidade<?php echo $i; ?>" required min="0">
    <?php endfor; ?>

    <input type="submit" value="Enviar">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Array para armazenar os livros
    $livros = array();

    // Loop para ler os dados de 5 livros
    for ($i = 1; $i <= 5; $i++) {
        $titulo = $_POST["titulo$i"];
        $quantidade = (int)$_POST["quantidade$i"];
        
        // Adiciona o livro ao mapa (array associativo)
        $livros[$titulo] = $quantidade;

        // Verifica se a quantidade é inferior a 5 e exibe um alerta
        if ($quantidade < 5) {
            echo "<script>alert('Atenção: O livro \"$titulo\" tem baixa quantidade em estoque ($quantidade).')</script>";
        }
    }

    // Ordena os livros pelo título
    ksort($livros);

    // Exibe a lista de livros ordenada pelo título
    echo "<h3>Lista de livros (ordenada por título):</h3>";
    echo "<ul>";
    foreach ($livros as $titulo => $quantidade) {
        echo "<li>$titulo - Quantidade em estoque: $quantidade</li>";
    }
    echo "</ul>";
}
?>
</body>
</html>
