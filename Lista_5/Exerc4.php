<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
</head>
<body>
<h1>Cadastro de Itens</h1>
    <form method="POST">
        <label for="item1">Nome do Item 1:</label>
        <input type="text" id="item1" name="item1" required>
        <label for="preco1">Preço do Item 1:</label>
        <input type="number" step="0.01" id="preco1" name="preco1" required>

        <label for="item2">Nome do Item 2:</label>
        <input type="text" id="item2" name="item2" required>
        <label for="preco2">Preço do Item 2:</label>
        <input type="number" step="0.01" id="preco2" name="preco2" required>

        <label for="item3">Nome do Item 3:</label>
        <input type="text" id="item3" name="item3" required>
        <label for="preco3">Preço do Item 3:</label>
        <input type="number" step="0.01" id="preco3" name="preco3" required>

        <label for="item4">Nome do Item 4:</label>
        <input type="text" id="item4" name="item4" required>
        <label for="preco4">Preço do Item 4:</label>
        <input type="number" step="0.01" id="preco4" name="preco4" required>

        <label for="item5">Nome do Item 5:</label>
        <input type="text" id="item5" name="item5" required><br><br>
        <label for="preco5">Preço do Item 5:</label>
        <input type="number" step="0.01" id="preco5" name="preco5" required>

        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Definir a taxa de imposto
        $imposto = 0.15;

        // Criar um array associativo para armazenar os itens e seus preços
        $itens = [
            $_POST["item1"] => $_POST["preco1"],
            $_POST["item2"] => $_POST["preco2"],
            $_POST["item3"] => $_POST["preco3"],
            $_POST["item4"] => $_POST["preco4"],
            $_POST["item5"] => $_POST["preco5"]
        ];

        // Calcular os preços com o imposto de 15% e atualizar o mapa
        foreach ($itens as $nome => $preco) {
            $itens[$nome] = $preco * (1 + $imposto); // Aplicando o imposto de 15%
        }

        // Ordenar os itens pelo preço (ordem crescente)
        asort($itens);

        // Exibir os itens ordenados
        echo "<h2>Lista de Itens com Imposto de 15%</h2>";
        echo "<table border='1'>
                <tr>
                    <th>Nome</th>
                    <th>Preço com Imposto</th>
                </tr>";

        foreach ($itens as $nome => $preco) {
            echo "<tr>
                    <td>$nome</td>
                    <td>R$ " . number_format($preco, 2, ',', '.') . "</td>
                </tr>";
        }

        echo "</table>";
    }
    ?>
</body>
</html>
