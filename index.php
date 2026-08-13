<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
<h1>Academia VibeFit</h1>

<h2>Cadastrar aluno: </h2>
<form method="POST" action="cadastrar.php">
    Nome: <input type="text" name="nome" required><br><br>
    Idade: <input type="number" name="idade" required><br><br>
    Plano: <input type="text" name="plano" required><br><br>
    Status: <input type="text" name="status" required><br><br>
    <input type="submit" value="Cadastrar">
    <button type="reset">Limpar Formulário</button>
</form>
<hr>

<h2>Lista de alunos</h2>
<?php include ("listar.php"); ?>

</body>
</html>