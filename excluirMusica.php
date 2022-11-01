<?php
include 'conexao.php';
$id = $_POST['id'];
$dados = "DELETE FROM musicas WHERE id = '$id'";
$excluir = mysqli_query($database, $dados);
header('location: plataforma.php');
?>