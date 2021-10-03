<?php

include 'conect1.php';
$cpf = $_GET["cpf"];

$buscar = $banco->query("SELECT * FROM alunos WHERE cpf = '$cpf'");

while ($linha = mysqli_fetch_array($buscar)) { 
    $foto = $linha["foto"];
}

unlink("$foto"); // deleta a foto da pasta

mysqli_query($banco, "DELETE FROM alunos WHERE cpf = '$cpf' ");



echo"Dados excluidos com sucesso!";

header("refresh:4;listar.php");

?>