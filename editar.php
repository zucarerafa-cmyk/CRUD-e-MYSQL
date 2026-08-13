<?php
require("conexao.php");
if($_SERVER['REQUEST_METHOD'] === "GET")
    {
$id = $_GET["id"];
$row = $conn->query("SELECT * FROM alunos WHERE id = $id")->fetch_assoc();}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Editar Aluno</h1>
    <form method="post" action="atualizar.php">
        <input type="hidden" name="id" value="<?= $row['id']; ?>">
        Nome: <input type="text" name="nome" value="<?= $row['nome']; ?>" required><br><br>
        Idade: <input type="number" name="idade" value="<?= $row['idade']; ?>" required><br><br>
        Plano: <input type="text" name="plano" value="<?= $row['plano']; ?>" required><br><br>
        Status: <input type="text" name="status" value="<?= $row['status']; ?>" required><br><br>
        <input type="submit" value="Atualizar">
    </form>
</body>
</html>
