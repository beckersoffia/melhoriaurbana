<?php
include 'conexao.php';

$result = $conn->query("SELECT * FROM cidades");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Melhorias Urbanas</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Selecione uma Cidade</h1>
    <ul>
        <?php while ($row = $result->fetch_assoc()): ?>
            <li><a href="pages/melhorias.php?cidade_id=<?= $row['id'] ?>"><?= $row['nome'] ?> (<?= $row['estado'] ?>)</a></li>
        <?php endwhile; ?>
    </ul>
    <a href="pages/cadastrar_cidade.php">Cadastrar Nova Cidade</a>
</body>
</html>
