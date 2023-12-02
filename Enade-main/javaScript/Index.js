function abrirConteudo(item){
    const materia = item.closest('.materia');
    const seta = materia.querySelector('.seta');
    const conteudos = materia.querySelectorAll('.conteudo');

    seta.classList.toggle("aberta");
    conteudos.forEach(conteudo => conteudo.classList.toggle("aberta"));
}

function abrirFiltro(){
    const seta = document.querySelector('.seta-filtro');
    const filtro = document.querySelector('.filtro');

    seta.classList.toggle('aberta');
    filtro.classList.toggle('aberta')
}