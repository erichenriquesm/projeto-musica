function addMusica(){
    var nomeMusica = document.querySelector('#nomeMusica').value;
    var autor = document.querySelector('#autor').value;
    var linkYT = document.querySelector('#linkYT').value;
    if((nomeMusica.length != 0 && linkYT.length != 0 && autor.length != 0)){
        document.querySelector('#error').style.display = 'none';
        document.querySelector('#success').style.display = 'block';
        var express = /(.*?)(^|\/|v=)([a-z0-9_-]{11})(.*)?/gi;
        var id = express.exec(linkYT);
        var dadosMusica = {
            nome_musica:nomeMusica,
            autor:autor,
            linkYT:id[3]
        }

        axios.post('http://localhost/projeto-musica/addMusica.php', dadosMusica)
            .then(response =>{
                if(response){
                    location.reload()
                }
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