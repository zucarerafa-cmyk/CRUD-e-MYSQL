<?php
require("conexao.php");
if($_SERVER['REQUEST_METHOD'] === "POST");

$id = $_POST['id'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$plano = $_POST['plano'];
$status = $_POST['status'];

$sql = "UPDATE alunos SET nome=?, idade=?, plano=?, status=? WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sissi", $nome, $idade, $plano, $status, $id);
$stmt->execute();

header ("Location: index.php");
?>