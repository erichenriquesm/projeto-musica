<?php
include 'conexao.php';
$dados = 'SELECT * FROM musicas';
$query = mysqli_query($database, $dados);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilos/plataforma/style.css">
        <!-- CSS only -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
            crossorigin="anonymous"
        >
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
            integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        >
        <title>Home</title>
    </head>
    <body>
        <header style="position: sticky; width: 100%; top: 0;" class="bg-dark">
            <menu>
                <h1>
                    <a id="title" href="landing.html">
                        Breezerly
                    </ai>
                </h1>
                <div>
                    <a href="#">Novidades</a>
                    <a href="#">Descubra</a>
                    <a href="#">Mais tocadas</a>
                </div>
            </menu>
        </header>
        <div style="height: 84.5vh; margin-top: 1px;" class="container-xxl">
            <div class="row justify-content-md-center">
                <div id="menu" style="margin-left: -13px;" class="col-2 bg-dark">
                    <div id="nav">
                        <h4>Principal</h4>
                        <ul>
                            <li>Playlists</li>
                            <li>Lista de desejos</li>
                            <li>Amigos</li>
                            <li>Compartilhar</li>
                        </ul>
                        <h4>Redes Sociais</h4>
                        <ul>
                            <li>YouTube</li>
                            <li>Instagram</li>
                            <li>Facebook</li>
                            <li>Compartilhar</li>
                        </ul>
                    </div>
                </div>
                <div class="col-10">
                    <div id="thumb">
                        <img src="imagens/pexels-anton-h-145707.jpg" alt="banner">
                    </div>
                    <div style="display: flex;
                    gap: 10px; margin: 10px 0;">
                        <h1>M??sicas</h1>
                        <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fa-solid fa-plus"></i> Adicionar m??sica
                        </button>

                        <button class="btn btn-dark">
                         <a href="editMusicaPag.php"><i class="fa-regular fa-pen-to-square"></i> Editar M??sica</a></i>
                        </button>
                    </div>
                    <div id="container-music">
                        <?php
                            while($get = mysqli_fetch_array($query)){

                        ?>
                        <div class="box">
                            <div id="op????es">

                            <div style="width: 30px; height: 30px; position: absolute; top: 0; right: 0;">
                                <form action="excluirMusica.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $get['id']?>">
                                    <button type="submit" class="btn">
                                        <i style="color:white;" class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </div>

                            </div>
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo $get['linkYT']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                
                        </div>
                        <?php }?>
                    </div>
                </div>
                <!-- Modal -->
                <div
                    class="modal fade"
                    id="exampleModal"
                    tabindex="-1"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true"
                >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content bg-dark">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Adicionar M??sica</h1>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <input type="text" name="nomeMusica"  id="nomeMusica" placeholder="Digite o nome da m??sica">
                                    <input type="text" name="linkYT" id="linkYT" placeholder="Digite a URL da m??sica do youtube">
                                    <input type="text" name="autor" id="autor" placeholder="Digite o nome do autor">
                            </div>
                            <div style="justify-content: space-between;" class="modal-footer">
                                <div class="d-flex">
                                    <p id="error">Preencha os dados corretamente</p>
                                    <p id="success">Sucesso ao se cadastrar</p>
                                </div>
                                <button  data-bs-dismiss="modal" aria-label="Close" type="reset" onclick="addMusica()" style="width: 100px;" type="button" class="btn btn-primary">Criar</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

        <script src="adicionarMusica.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    </body>
</html>
