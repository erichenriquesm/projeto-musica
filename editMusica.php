<?php
include 'conexao.php';
$id = $_POST['id'];
$nome_musica = $_POST['nome_musica'];
$duracao = $_POST['duracao'];
$autor = $_POST['autor'];
$estilo = $_POST['estilo'];
$dados = "UPDATE musicas SET nome_musica = '$nome_musica', duracao = '$duracao', autor = '$autor', estilo = '$estilo' WHERE id = '$id'";
$atualizar = mysqli_query($database, $dados);
header('location:http://localhost/projeto-musica/plataforma.php')
?>