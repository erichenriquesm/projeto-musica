<?php
include 'conexao.php';
$id = $_POST['id'];
$dados = "DELETE FROM users WHERE id = '$id'";
$excluir = mysqli_query($database, $dados);
header('location: lista.php');
?>