<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Diferença de Dias entre Duas Datas</title>
</head>
<body>
    <h2>Digite duas datas para calcular a diferença de dias:</h2>
    <form method="POST" action="">
        <label for="data1">Data 1 (dd/mm/YYYY):</label>
        <input type="text" name="data1" placeholder="dd/mm/YYYY" required>
        <br><br>
        <label for="data2">Data 2 (dd/mm/YYYY):</label>
        <input type="text" name="data2" placeholder="dd/mm/YYYY" required>
        <br><br>
        <input type="submit" value="Calcular Diferença">
    </form>
<?php
// Função para calcular a diferença de dias entre duas datas
function calcularDiferencaDias($data1, $data2) {
    // Converte as datas para o formato timestamp
    $timestampData1 = strtotime($data1);
    $timestampData2 = strtotime($data2);
    
    // Calcula a diferença em segundos
    $diferencaSegundos = abs($timestampData2 - $timestampData1);
    
    // Converte a diferença de segundos para dias
    $diferencaDias = floor($diferencaSegundos / (60 * 60 * 24));
    
    return $diferencaDias;
}

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera as duas datas enviadas pelo formulário
    $data1 = $_POST['data1'];
    $data2 = $_POST['data2'];
    
    // Chama a função para calcular a diferença de dias
    $diasDeDiferenca = calcularDiferencaDias($data1, $data2);
    
    echo "A diferença de dias entre $data1 e $data2 é: $diasDeDiferenca dias.";
}
?>
</body>
</html>