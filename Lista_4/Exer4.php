<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de data</title>
</head>
<body>
<form method="POST" action="">
    <label for="dia">Dia:</label>
    <input type="number" name="dia" required>
    
    <label for="mes">Mês:</label>
    <input type="number" name="mes" required>
    
    <label for="ano">Ano:</label>
    <input type="number" name="ano" required>
    
    <input type="submit" value="Verificar Data">
</form>

<?php

// Função para validar a data e exibi-la no formato dd/mm/YYYY
function validarData($dia, $mes, $ano) {
    // Verificar se a data é válida usando a função checkdate
    if (checkdate($mes, $dia, $ano)) {
        // Se for válida, formata a data como dd/mm/YYYY
        return sprintf("%02d/%02d/%04d", $dia, $mes, $ano);
    } else {
        // Se a data não for válida
        return "Data inválida!";
    }
}

// Lê os valores do formulário
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $ano = $_POST['ano'];
    
    // Chama a função para validar e formatar a data
    $dataFormatada = validarData($dia, $mes, $ano);
    
    // Exibe a data ou mensagem de erro
    echo "Resultado: " . $dataFormatada;
}

?>
</body>
</html>
