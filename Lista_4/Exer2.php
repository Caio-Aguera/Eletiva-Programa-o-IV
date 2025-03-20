<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Maiúsculo e Minúsculo</title>
</head>
<body>
<h1>Digite uma palavra:</h1>
    <form method="POST">
        <input type="text" name="palavra" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recebe a palavra digitada no formulário
        $palavra = $_POST['palavra'];
        
        // Funções para converter para maiúsculo e minúsculo
        $maiusculo = strtoupper($palavra);
        $minusculo = strtolower($palavra);

        // Exibe a palavra nos dois formatos
        echo "<p>Palavra em maiúsculo: <strong>$maiusculo</strong></p>";
        echo "<p>Palavra em minúsculo: <strong>$minusculo</strong></p>";
    }
    ?>
</body>
</html>