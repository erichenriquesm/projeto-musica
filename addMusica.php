<?php
include 'conexao.php';
$data = json_decode(file_get_contents('php://input'), true);
$nome_musica = $data['nome_musica'];
$duracao = $data['duracao'];
$autor = $data['autor'];
$estilo = $data['estilos'];
$dados = "INSERT INTO musicas VALUES(null, '$nome_musica', '$duracao', '$autor', '$estilo')";
$query = mysqli_query($database, $dados);
header('location:http://localhost/projeto-musica/plataforma.php');
?>