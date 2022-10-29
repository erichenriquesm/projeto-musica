<?php
include 'conexao.php';
$id = $_POST['id'];
$email = $_POST['email'];
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$dados = "UPDATE users SET email = '$email', nome = '$nome', senha = '$senha' WHERE id = '$id'";
$atualizar = mysqli_query($database, $dados);
header('location:http://localhost/projeto-musica/dev.php')
?>