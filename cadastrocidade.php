<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $estado = $_POST['estado'];

    $stmt = $conn->prepare("INSERT INTO cidades (nome, estado) VALUES (?, ?)");
    $stmt->bind_param("ss", $nome, $estado);
    $stmt->execute();

    header('Location: ../index.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Cidade</title>
</head>
<body>
    <h1>Cadastrar Nova Cidade</h1>
    <form method="post">
        <label>Nome da Cidade:</label>
        <input type="text" name="nome" required>
        <label>Estado:</label>
        <input type="text" name="estado" required>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
