function addMusica(){
    var nomeMusica = document.querySelector('#nomeMusica').value;
    var duracao = document.querySelector('#duracao').value;
    var autor = document.querySelector('#autor').value;
    var estilos = document.querySelector('#estilos').value;
    if((nomeMusica.length != 0 && duracao.length != 0 && autor.length != 0 && estilos.length !=0)){
        document.querySelector('#error').style.display = 'none';
        document.querySelector('#success').style.display = 'block';
        var dadosMusica = {
            nome_musica:nomeMusica,
            duracao:duracao,
            autor:autor,
            estilos:estilos
        }

        axios.post('http://localhost/projeto-musica/addMusica.php', dadosMusica)
            .then(response =>{
                console.log(response);
            })

            .catch(error => {
                console.log(error);
            })
        ; 
    }else{
        document.querySelector('#error').style.display = 'block';
        document.querySelector('#success').style.display = 'none';
    }
}