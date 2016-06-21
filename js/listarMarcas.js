$(document).ready(function (){

    getTodas();

});


function getTodas(){

    $.ajax({
        type: "POST",
        url: 'funcoes/funcoesMarcas.php',
        data: {funcao: "getTodas"},
        success: function (html) {
            var test = jQuery.parseJSON(html);
            console.log(test);
            /*drawTable(test);

            $('#carsTable').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "pageLength": 3
            });*/
}
});

    
}

