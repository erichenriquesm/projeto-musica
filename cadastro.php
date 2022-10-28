<?php
include 'conexao.php';
$data = json_decode(file_get_contents('php://input'), true);
$nome = $data['nome'];
$email = $data['email'];
$senha = $data['senha'];
$dados = "INSERT INTO users VALUES(null, '$nome', '$email', '$senha')";
$query = mysqli_query($database,$dados);


?>