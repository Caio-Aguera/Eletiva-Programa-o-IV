<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe o número informado pelo usuário
    $numero = (int)$_POST['numero'];

    // Valida se o número é maior que 0
    if ($numero > 0) {
        echo "<h3>Números de 1 até $numero:</h3>";
        for ($i = 1; $i <= $numero; $i++) {
            echo $i . "<br>";
        }
    } else {
        echo "<h3>Por favor, insira um número maior que 0.</h3>";
    }
} else {
    // Exibe o formulário para o usuário inserir o número
    echo '<form method="POST">
            <label for="numero">Informe um número: </label>
            <input type="number" id="numero" name="numero" required>
            <input type="submit" value="Enviar">
          </form>';
}
?>
</body>
</html>