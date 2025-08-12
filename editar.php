<?php
// Edição com erro de lógica (não busca o ID corretamente)
include("db.php");
$id = $_GET["id"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    $sql = "UPDATE usuarios SET nome='$nome', email='$email' WHERE id=$id";
    
}

$sql = "SELECT * FROM usuarios WHERE id = $id";
$res = mysqli_query($conn, $sql);
$dado = mysqli_fetch_assoc($res);


?>

<form method="POST">
    Nome: <input type="text" name="nome" value="<?= $dado['nome'] ?>"><br>
    Email: <input type="email" name="email" value="<?= $dado['email'] ?>"><br>
    <input type="submit" value="Salvar">
</form>