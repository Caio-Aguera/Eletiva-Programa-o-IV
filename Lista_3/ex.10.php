<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <h2>Informe um número para ver a tabuada:</h2>
    <form method="POST" action="">
        <label for="numero">Número:</label>
        <input type="text" id="numero" name="numero" required>
        <input type="submit" value="Ver Tabuada">
    </form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numero = $_POST['numero'];  // Pega o número informado pelo usuário

    // Verifica se o número é válido
    if (is_numeric($numero)) {
        echo "<h2>Tabuada de $numero:</h2>";
        // Loop for para imprimir a tabuada
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "$numero x $i = $resultado <br>";
        }
    } else {
        echo "Por favor, insira um número válido.";
    }
} else {
?>

<?php
}
?>
</body>
</html>