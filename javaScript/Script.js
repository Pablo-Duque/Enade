document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('form');
    const nome = document.getElementById('nome');
    const sobreNome = document.getElementById('sobreNome');
    const email = document.getElementById('email');
    const senha = document.getElementById('senha');
    const confirmaSenha = document.getElementById('confirmaSenha');

    form.addEventListener('submit', (e) =>{
        e.preventDefault();
        checaInputs();
    });

    function checaInputs(){
        const valorNome = nome.value.trim();
        const valorSobreNome = sobreNome.value.trim();
        const valorEmail = email.value.trim();
        const valorSenha = senha.value.trim();
        const valorConfirmaSenha = confirmaSenha.value.trim();
        if(valorNome === ''){
            setErrado(nome, 'Nome não pode ser vazio');
        }else{
            setCerto(nome);
        }

        if(valorSobreNome === ''){
            setErrado(sobreNome, 'Sobrenome não pode ser vazio');
        }else{
            setCerto(sobreNome);
        }

        if(valorEmail === ''){
            setErrado(email, 'Email não pode ser vazio');
        }else if(!checaEmail(valorEmail)){
            setErrado(email, 'Email não é válido');
        }else{
            setCerto(email);
        }

        if(valorSenha === ''){
            setErrado(senha, 'Senha não pode ser vazio');
        }else{
            setCerto(senha);
        }

        if(valorConfirmaSenha === ''){
            setErrado(confirmaSenha, 'Senha não pode ser vazio');
        }else if(valorSenha !== valorConfirmaSenha){
            setErrado(confirmaSenha, 'Senhas não coincidem');
        }else{
            setCerto(confirmaSenha);
        }

        const inputs = document.querySelectorAll('.caixa input');
        const todosCorretos = Array.from(inputs).every(input => input.parentElement.classList.contains('certo'));

        if (todosCorretos) {
            enviarDados();
        }
    }

    function setErrado(input, mensagem){
        const caixa = input.parentElement; //.caixa
        const small = caixa.querySelector('small');
        //set na classe erro
        caixa.className = 'caixa errado';

        //adiciona mensagem no small
        small.innerText = mensagem;

    }

    function setCerto(input){
        const caixa = input.parentElement;
        const small = caixa.querySelector('small');
        small.style.display = 'none';
        caixa.className = 'caixa certo';
    }

    function checaEmail(email){
        return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
    }

    function enviarDados() {
        const formData = new FormData(form);
    
        fetch('cadastro.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json()) // Se o PHP retornar JSON
        .then(data => {
            console.log(data); // Resposta do PHP
        })
        .catch(error => {
            console.error('Erro na requisição:', error);
        });
    }
});
