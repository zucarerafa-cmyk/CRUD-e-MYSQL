<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "academia";

$conn = new mysqli ($hostname, $username, $password, $database);

if ($conn->connect_error){
    die("Falha na conexão: ". $conn->connect_error);
}

echo ("Conectado com sucesso ao banco de dados!");
?>