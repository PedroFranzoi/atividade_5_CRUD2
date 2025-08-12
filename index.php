<?php
include 'db.php';
$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

    echo "<table border ='1'>
        <tr>
            <th> Nome </th>
            <th> Email </th>
        </tr>
         ";
    while ($row = $result->fetch_assoc()) {

        echo "<tr>
                <td> {$row['name']} </td>
                <td> {$row['email']} </td>
                <td> 
                    <a href='editar.php?id={$row['id']}'>Editar<a>
                    <a href='excluir.php?id={$row['id']}'>Excluir<a>
                </td>
              </tr>   
        ";
    }
    echo "</table>";
} else {
    echo "Nenhum registro encontrado.";
}
$conn -> close();
echo "<a href='cadastrar.php'>Inserir novo Registro</a>";