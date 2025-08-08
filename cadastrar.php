<?php
// Cadastro com erros de sintaxe e falta de validação
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    $sql = "INSERT INTO usuarios (nome,email) VALUES ('$nome', '$email')";
    $res = mysqli_query($conn, $sql);
    if ($conn->query($sql) === true) {
        echo "Usuário cadastrado com sucesso!";
    }else{
        echo "Erro ao cadastrar!". '<br>'. $conn->error;
    }
    $conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>
<body>
    <form method="POST" action="cadastrar.php">
    <label for="name">Nome:</label>
    <input type="text" name="nome" required><br>
    <label for="email">Email:</label>
    <input type="email" name="email" required><br>
    <input type="submit" value="Cadastrar">
</form>
</body>
</html>