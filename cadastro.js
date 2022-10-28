function cadastrar(){
    var nome = document.querySelector('#nome').value;
    var email = document.querySelector('#email').value;
    var senha = document.querySelector('#senha').value;
    var confirmSenha = document.querySelector('#confirmSenha').value;
    if((nome.length != 0 && email.length != 0 && senha.length != 0) && (senha === confirmSenha)){
        document.querySelector('#error').style.display = 'none';
        document.querySelector('#success').style.display = 'block';
        var dadosUser = {
            nome:nome,
            email:email,
            senha:senha
        }

        axios.post('http://localhost/projeto-musica/cadastro.php', dadosUser)
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