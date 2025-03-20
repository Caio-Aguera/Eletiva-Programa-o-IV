<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>

<h2>Cadastro de Notas dos Alunos</h2>

<form method="POST">
    <?php for ($i = 1; $i <= 5; $i++) : ?>
        <fieldset>
            <legend>Aluno <?= $i ?></legend>
            <label for="nome<?= $i ?>">Nome:</label>
            <input type="text" id="nome<?= $i ?>" name="nome<?= $i ?>" required><br><br>

            <label for="nota1_<?= $i ?>">Nota 1:</label>
            <input type="number" id="nota1_<?= $i ?>" name="nota1_<?= $i ?>" step="0.01" required><br><br>

            <label for="nota2_<?= $i ?>">Nota 2:</label>
            <input type="number" id="nota2_<?= $i ?>" name="nota2_<?= $i ?>" step="0.01" required><br><br>

            <label for="nota3_<?= $i ?>">Nota 3:</label>
            <input type="number" id="nota3_<?= $i ?>" name="nota3_<?= $i ?>" step="0.01" required><br><br>
        </fieldset>
    <?php endfor; ?>

    <input type="submit" value="Calcular Médias">
</form>

<?php if (!empty($alunos)): ?>
    <h3>Alunos Ordenados pela Média</h3>
    <ul>
        <?php foreach ($alunos as $nome => $media) : ?>
            <li><?= $nome ?> - Média: <?= number_format($media, 2) ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<?php
// Função para calcular a média das notas
function calcularMedia($notas) {
    return array_sum($notas) / count($notas);
}

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $alunos = []; // Array para armazenar alunos e médias

    // Coleta os dados dos alunos
    for ($i = 1; $i <= 5; $i++) {
        $nome = $_POST["nome$i"];
        $nota1 = $_POST["nota1_$i"];
        $nota2 = $_POST["nota2_$i"];
        $nota3 = $_POST["nota3_$i"];
        
        // Calcula a média
        $media = calcularMedia([$nota1, $nota2, $nota3]);

        // Adiciona o aluno e sua média ao array
        $alunos[$nome] = $media;
    }

    // Ordena o array de alunos pela média (do maior para o menor)
    arsort($alunos);
}
?>
</body>
</html>