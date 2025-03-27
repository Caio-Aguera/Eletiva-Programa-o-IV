<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Média</title>
</head>
<body>
    <h2>Digite as três notas:</h2>

    <form method="POST">
        <label for="nota1">Nota 1:</label>
        <input type="number" name="nota1" step="0.01" required>
        
        <label for="nota2">Nota 2:</label>
        <input type="number" name="nota2" step="0.01" required>
        
        <label for="nota3">Nota 3:</label>
        <input type="number" name="nota3" step="0.01" required>
        
        <input type="submit" value="Calcular Média">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Coletando as notas enviadas pelo formulário
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];
        
        // Calculando a média
        $media = ($nota1 + $nota2 + $nota3) / 3;
        
        // Exibindo o resultado
        echo "<h3>A média das notas é: " . number_format($media, 2, ',', '.') . "</h3>";
    }
    ?>
</body>
</html>