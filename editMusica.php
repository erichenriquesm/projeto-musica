<?php
include 'conexao.php';
$id = $_POST['id'];
$nome_musica = $_POST['nome_musica'];
$autor = $_POST['autor'];
$linkYT = $_POST['linkYT'];
if(strlen($nome_musica) != 0 && strlen($autor) != 0 && strlen($linkYT) != 0){
    $id_youtube = explode("?v=", $linkYT);
    $id_video = $id_youtube[1];
    $dados = "UPDATE musicas SET nome_musica = '$nome_musica',linkYT = '$id_video',  autor = '$autor' WHERE id = '$id'";
    $atualizar = mysqli_query($database, $dados);
}
header('location:http://localhost/projeto-musica/plataforma.php');
?>