<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Palavra</title>
</head>
<body>
<h2>Verificar se a segunda palavra está contida na primeira</h2>
    <form method="POST">
        <label for="primeira_palavra">Primeira palavra:</label>
        <input type="text" id="primeira_palavra" name="primeira_palavra" required><br><br>

        <label for="segunda_palavra">Segunda palavra:</label>
        <input type="text" id="segunda_palavra" name="segunda_palavra" required><br><br>

        <button type="submit">Verificar</button>
    </form>

<?php
// Função para verificar se a segunda palavra está contida na primeira
function verificar_palavra_conteudo($primeira_palavra, $segunda_palavra) {
    // Utiliza a função strpos() para verificar se a segunda palavra está contida na primeira
    if (strpos($primeira_palavra, $segunda_palavra) !== false) {
        return true; // Segunda palavra encontrada
    }
    return false; // Segunda palavra não encontrada
}

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe as palavras do formulário
    $primeira_palavra = $_POST['primeira_palavra'];
    $segunda_palavra = $_POST['segunda_palavra'];

    // Chama a função para verificar se a segunda palavra está contida na primeira
    if (verificar_palavra_conteudo($primeira_palavra, $segunda_palavra)) {
        echo "A segunda palavra está contida na primeira palavra.";
    } else {
        echo "A segunda palavra NÃO está contida na primeira palavra.";
    }
}
?>
</body>
</html>