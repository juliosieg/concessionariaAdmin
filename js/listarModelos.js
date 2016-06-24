$(document).ready(function () {

    getTodos();

});


function getTodos() {

    $.ajax({
        type: "POST",
        url: 'funcoes/funcoesModelos.php',
        data: {funcao: "getTodos"},
        success: function (html) {
            var test = jQuery.parseJSON(html);
            console.log(test);
            drawTable(test);

            $('#tableModelos').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "pageLength": 5,
                "lengthMenu": [5, 10, 25, 50, 75, 100]
            });
        }
    });


}

function drawTable(data) {

    if (data.length > 1) {
        for (var i = 0; i < data.length; i++) {
            drawRow(data[i]);
        }

    } else if (data.length == 1) {

        drawRow(data[0]);
    }
}

function drawRow(rowData) {
    console.log(rowData);
    var row = $("<tr />")
    $("#tableModelos").append(row);
    row.append($("<td width='10%' codigo='" + rowData.id + "'>" + rowData.id + "</td>"));
    row.append($("<td width='30%'>" + rowData.descricao + "</td>"));
    row.append($("<td width='25%'>" + rowData.id_categoria + "</td>"));
    row.append($("<td width='25%'>" + rowData.id_marca + "</td>"));
    row.append($("<td width='10%'> \n\
        <input id=btnAlterar type=\"image\" src=\"images/edit.png\" width=\"18px\" height=\"18px\" codigo=" + rowData.id + " onclick=\"alterar($(this).attr('codigo'))\"/> \n\
        <input id=btnExcluir type=\"image\" src=\"images/delete.png\" width=\"18px\" height=\"18px\" codigo=" + rowData.id + " onclick=\"excluir($(this).attr('codigo'))\"/> "));

}

function excluir(codigo) {

    bootbox.confirm({
        title: 'Exclusão',
        message: 'Tem certeza que deseja excluir o modelo de código ' + codigo + '?',
        buttons: {
            'cancel': {
                label: 'Cancelar',
                className: 'btn-default pull-left'
            },
            'confirm': {
                label: 'Excluir',
                className: 'btn-danger pull-right'
            }
        },
        callback: function (result) {
            if (result) {
                $.ajax({
                    type: "POST",
                    url: 'funcoes/funcoesModelos.php',
                    data: {funcao: "excluir", codigo: codigo},
                    success: function (data) {
                        var test = $.trim(data);
                        if (test == 'OK') {
                            $("#tableModelos").dataTable().fnClearTable();
                            $("#tableModelos").dataTable().fnDestroy();

                            getTodos();

                            $.notify({
                                // options
                                message: 'Exclusão executada com sucesso'
                            }, {
                                // settings
                                type: 'success'
                            });
                        } else {
                            $.notify({
                                // options
                                message: 'Erro na exclusão: ' + test
                            }, {
                                // settings
                                type: 'danger'
                            });
                        }

                    }
                });
            }
        }
    });
}
