$(document).ready(function () {

    getFacebookCounter();

    getSiteCounter();

    incrementarContador();

});

function getSiteCounter() {
    $.ajax({
        type: "GET",
        url: 'funcoes/lerContadorVisitas.php',
        success: function (data) {
            var result = $.trim(data);
            $("#contadorVisitas").text(result);
        }
    });
}

function getFacebookCounter() {
    var funcao = "getFacebookCounter";

    $.ajax({
        type: "POST",
        url: 'funcoes/funcoesDashboard.php',
        data: {funcao: funcao},
        success: function (data) {
            var result = $.trim(data);
            $("#contadorFacebook").text(result);
        }
    });
}
;

function incrementarContador() {
    $.ajax({
        type: "GET",
        url: 'funcoes/contadorVisitas.php',
        success: function (data) {
            console.log('OK');
        }
    });
}
