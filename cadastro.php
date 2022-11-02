<?php
include 'conexao.php';
$data = json_decode(file_get_contents('php://input'), true);
$nome = $data['nome'];
$email = $data['email'];
$password = $data['senha'];
$senha = password_hash($password, PASSWORD_DEFAULT);
$dados = "INSERT INTO users VALUES(null, '$nome', '$email', '$senha')";
$query = mysqli_query($database,$dados);


?>