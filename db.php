<?php
// Conexão com o banco (contém erro de variável e de conexão)
$host = "localhost";
$userName = "root";
$password = "root";
$db = "atividade_5_CRUD2";

$conn = mysqli_connect($host, $userName, $password, $db); // Erro: $hot ao invés de $host

if (!$conn) {
    die("Falha na conexão: ".mysqli_connect_error());
}
?>