function iniciaTimer(duracao, display) {
    var timer = duracao, horas, minutos, segundos;

    var intervalo = setInterval(function() {
        horas = parseInt(timer / 3600, 10);
        minutos = parseInt((timer % 3600) / 60, 10);
        segundos = parseInt(timer % 60, 10);

        horas = horas < 10 ? "0" + horas : horas;
        minutos = minutos < 10 ? "0" + minutos : minutos;
        segundos = segundos < 10 ? "0" + segundos : segundos;

        display.textContent = horas + ":" + minutos + ":" + segundos;

        if (--timer < 0) {
            clearInterval(intervalo);
            alert("O tempo acabou!");
            window.location.replace('index.php');
        }
    }, 1000);
}

window.onload = function() {
    var duracao = 60 * 240; // 4 horas
    var display = document.querySelector("#timer");

    iniciaTimer(duracao, display);
}
