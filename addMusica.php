<?php
include 'conexao.php';
$data = json_decode(file_get_contents('php://input'), true);
$nome_musica = $data['nome_musica'];
$linkYT = $data['linkYT'];
$autor = $data['autor'];
$dados = "INSERT INTO musicas VALUES(null, '$nome_musica', '$linkYT', '$autor')";
$query = mysqli_query($database, $dados);
?>