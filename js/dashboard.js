$(document).ready(function (){

	getFacebookCounter();

});

function getFacebookCounter(){
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
};
