<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Caracteres</title>
</head>
<body>
<h1>Digite uma palavra para contar os caracteres</h1>

<form method="POST">
    <label for="palavra">Palavra:</label>
    <input type="text" name="palavra" id="palavra" required>
    <button type="submit">Contar Caracteres</button>
</form>

<?php
// Função que recebe uma palavra e retorna o número de caracteres
function contarCaracteres($palavra) {
    // Utilizando a função interna strlen() para contar os caracteres
    return strlen($palavra);
}

// Verificando se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtendo a palavra do formulário
    $palavra = $_POST['palavra'];

    // Chamando a função e exibindo o número de caracteres
    $numeroCaracteres = contarCaracteres($palavra);
    echo "O número de caracteres da palavra '{$palavra}' é: {$numeroCaracteres}";
}
?>
</body>
</html>