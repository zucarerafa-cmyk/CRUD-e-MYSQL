<?php
require ("conexao.php");
if ($_SERVER['REQUEST_METHOD'] === "GET"){
$id = $_GET['id'];

$sql = "DELETE FROM alunos WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: index.php");
}
?>