<?php
require ("conexao.php");
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $plano = $_POST['plano'];
    $status = $_POST['status'] ?? '';

    $sql = "INSERT INTO alunos (nome, idade, plano, status) VALUES (?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("siss", $nome, $idade, $plano, $status);
    $stmt->execute();

    header ("Location: index.php");
}
?>