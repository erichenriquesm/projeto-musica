<?php
include 'conexao.php';
$id = $_POST['id'];
$nome_musica = $_POST['nome_musica'];
$autor = $_POST['autor'];
$linkYT = $_POST['linkYT'];
$dados = "UPDATE musicas SET nome_musica = '$nome_musica',linkYT = '$linkYT',  autor = '$autor' WHERE id = '$id'";
$atualizar = mysqli_query($database, $dados);
header('location:http://localhost/projeto-musica/plataforma.php')
?>