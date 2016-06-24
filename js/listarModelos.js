$(document).ready(function () {

    getTodos();

    $("#erroAlteracaoDescricaoVazia").hide();

    //Para que mensagem abra mais do que uma vez, se fechada
    $(function () {
        $(document).on('click', '.alert-close', function () {
            $(this).parent().hide();
        })
    });

});


function getTodos() {

    $.ajax({
        type: "POST",
        url: 'funcoes/funcoesModelos.php',
        data: {funcao: "getTodos"},
        success: function (html) {
            var test = jQuery.parseJSON(html);
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
    var row = $("<tr />")
    $("#tableModelos").append(row);
    row.append($("<td width='10%' codigo='" + rowData.id + "'>" + rowData.id + "</td>"));
    row.append($("<td width='30%'>" + rowData.descmodelo + "</td>"));
    row.append($("<td width='25%'>" + rowData.desccategoria + "</td>"));
    row.append($("<td width='25%'>" + rowData.descmarca + "</td>"));
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

function alterar(codigo) {

    $('#modalEditarModelo').modal('show');
    $('#idEditarModelo').attr('disabled', 'true');
    $('#idEditarModelo').val(codigo);

    buscaCategoriasEdicao();
    buscaMarcasEdicao();

    pesquisaDadosEdicao(codigo);

}

function buscaCategoriasEdicao() {
    $.ajax({
        type: "POST",
        url: 'funcoes/funcoesCategorias.php',
        data: {funcao: "getTodas"},
        success: function (html) {
            var test = jQuery.parseJSON(html);

            $('#categoriaEditarModelo').find('option').remove();

            $.each(test, function (i, item) {
                $("#categoriaEditarModelo").append("<option id=" + item.id + " descricao=" + item.descricao + ">" + item.descricao + "</option>")
            });
        }
    });
}

function buscaMarcasEdicao() {
    $.ajax({
        type: "POST",
        url: 'funcoes/funcoesMarcas.php',
        data: {funcao: "getTodas"},
        success: function (html) {
            var test = jQuery.parseJSON(html);

            $('#marcaEditarModelo').find('option').remove();

            $.each(test, function (i, item) {
                $("#marcaEditarModelo").append("<option id=" + item.id + " descricao=" + item.descricao + ">" + item.descricao + "</option>")
            });

        }

    });

}

function pesquisaDadosEdicao(codigo) {
    $.ajax({
        type: "POST",
        url: 'funcoes/funcoesModelos.php',
        data: {funcao: "pesquisaDadosEdicao", codigo: codigo},
        success: function (data) {
            var test = JSON.parse(data);

            $('#descricaoEditarModelo').val(test[0].descricao);

            $("#categoriaEditarModelo option").each(function ()
            {
                if ($(this).attr("id") == test[0].id_categoria) {
                    $(this).attr("selected", "");
                }
            });

            $("#marcaEditarModelo option").each(function ()
            {
                if ($(this).attr("id") == test[0].id_marca) {
                    $(this).attr("selected", "");
                }
            });
        }
    });
}

function salvarAlteracoes() {
    var descricao = $("#descricaoEditarModelo").val();

    if (descricao == "" || descricao == null) {
        $("#erroAlteracaoDescricaoVazia").show();
    } else {
        
        var codigo = $("#idEditarModelo").val();
        var categoria = $("#categoriaEditarModelo option:selected").attr("id");
        var marca = $("#marcaEditarModelo option:selected").attr("id");

        $.ajax({
            type: "POST",
            url: 'funcoes/funcoesModelos.php',
            data: {funcao: "salvarAlteracoes", codigo: codigo, descricao: descricao, categoria: categoria, marca: marca},
            success: function (data) {
                var test = $.trim(data);
                if (test == 'OK') {
                    $('#modalEditarModelo').modal('hide');

                    $("#tableModelos").dataTable().fnClearTable();
                    $("#tableModelos").dataTable().fnDestroy();

                    getTodos();

                    $.notify({
                        // options
                        message: 'Alteração executada com sucesso'
                    }, {
                        // settings
                        type: 'success'
                    });
                } else {
                    $('#modalEditarMarca').modal('hide');
                    $.notify({
                        // options
                        message: 'Erro na alteração: ' + test
                    }, {
                        // settings
                        type: 'danger'
                    });
                }

            }
        });

    }



}