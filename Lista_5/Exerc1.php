<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
<h1>Cadastro de Contatos</h1>
    <form method="POST">
        <label for="nome1">Nome do Contato 1:</label>
        <input type="text" id="nome1" name="nome1" required>
        <label for="telefone1">Número do Contato 1:</label>
        <input type="text" id="telefone1" name="telefone1" required>

        <label for="nome2">Nome do Contato 2:</label>
        <input type="text" id="nome2" name="nome2" required>
        <label for="telefone2">Número do Contato 2:</label>
        <input type="text" id="telefone2" name="telefone2" required>

        <label for="nome3">Nome do Contato 3:</label>
        <input type="text" id="nome3" name="nome3" required>
        <label for="telefone3">Número do Contato 3:</label>
        <input type="text" id="telefone3" name="telefone3" required>

        <label for="nome4">Nome do Contato 4:</label>
        <input type="text" id="nome4" name="nome4" required>
        <label for="telefone4">Número do Contato 4:</label>
        <input type="text" id="telefone4" name="telefone4" required>

        <label for="nome5">Nome do Contato 5:</label>
        <input type="text" id="nome5" name="nome5" required>
        <label for="telefone5">Número do Contato 5:</label>
        <input type="text" id="telefone5" name="telefone5" required>

        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Array para armazenar os contatos
        $contatos = [];

        // Função para adicionar contatos, verificando duplicatas
        function adicionarContato(&$contatos, $nome, $telefone) {
            // Verifica se já existe o nome ou telefone no mapa
            foreach ($contatos as $nomeExistente => $telefoneExistente) {
                if ($nomeExistente == $nome || $telefoneExistente == $telefone) {
                    return false; // Retorna falso se encontrar duplicata
                }
            }
            // Adiciona o contato ao mapa
            $contatos[$nome] = $telefone;
            return true;
        }

        // Adiciona os contatos ao mapa
        $result1 = adicionarContato($contatos, $_POST["nome1"], $_POST["telefone1"]);
        $result2 = adicionarContato($contatos, $_POST["nome2"], $_POST["telefone2"]);
        $result3 = adicionarContato($contatos, $_POST["nome3"], $_POST["telefone3"]);
        $result4 = adicionarContato($contatos, $_POST["nome4"], $_POST["telefone4"]);
        $result5 = adicionarContato($contatos, $_POST["nome5"], $_POST["telefone5"]);

        // Exibe uma mensagem de erro se houver duplicatas
        if (!$result1 || !$result2 || !$result3 || !$result4 || !$result5) {
            echo "<p style='color: red;'>Erro: Um ou mais contatos têm nomes ou números duplicados!</p>";
        }

        // Ordena os contatos pelo nome
        ksort($contatos);

        // Exibe a lista de contatos ordenada
        echo "<h2>Lista de Contatos</h2>";
        echo "<table border='1'>
                <tr>
                    <th>Nome</th>
                    <th>Número de Telefone</th>
                </tr>";

        foreach ($contatos as $nome => $telefone) {
            echo "<tr>
                    <td>$nome</td>
                    <td>$telefone</td>
                </tr>";
        }

        echo "</table>";
    }
    ?>
</body>
</html>
