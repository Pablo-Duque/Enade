function abrirConteudo(item){
    const materia = item.closest('.materia');
    const seta = materia.querySelector('.seta');
    const conteudos = materia.querySelectorAll('.conteudo');

    seta.classList.toggle("aberta");
    conteudos.forEach(conteudo => conteudo.classList.toggle("aberta"));
}