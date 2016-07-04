$(document).ready(function () {

    getTodas();

    $("#erroAlteracaoDescricaoVazia").hide();

    //Para que mensagem abra mais do que uma vez, se fechada
    $(function () {
        $(document).on('click', '.alert-close', function () {
            $(this).parent().hide();
        })
    });

});


function getTodas() {

    $.ajax({
        type: "POST",
        url: 'funcoes/funcoesOpcionais.php',
        data: {funcao: "getTodas"},
        success: function (html) {
            var test = jQuery.parseJSON(html);
            console.log(test);
            drawTable(test);

            $('#tableOpcionais').DataTable({
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

    //$("#carsTable tr").remove();


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
    $("#tableOpcionais").append(row);
    row.append($("<td width='10%' codigo='" + rowData.id + "'>" + rowData.id + "</td>"));
    row.append($("<td width='80%'>" + rowData.descricao + "</td>"));
    row.append($("<td width='10%'> \n\
        <input id=btnAlterar type=\"image\" src=\"images/edit.png\" width=\"18px\" height=\"18px\" codigo=" + rowData.id + " onclick=\"alterar($(this).attr('codigo'))\"/> \n\
        <input id=btnExcluir type=\"image\" src=\"images/delete.png\" width=\"18px\" height=\"18px\" codigo=" + rowData.id + " onclick=\"excluir($(this).attr('codigo'))\"/> "));

}


function alterar(codigo) {

    $('#modalEditarOpcional').modal('show');
    $('#idEditarOpcional').attr('disabled', 'true');
    $('#idEditarOpcional').val(codigo);

    pesquisaCodigo(codigo);

}

function excluir(codigo) {

    bootbox.confirm({
        title: 'Exclusão',
        message: 'Tem certeza que deseja excluir o opcional de código ' + codigo + '?',
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
                    url: 'funcoes/funcoesOpcionais.php',
                    data: {funcao: "excluir", codigo: codigo},
                    success: function (data) {
                        var test = $.trim(data);
                        if (test == 'OK') {
                            $("#tableOpcionais").dataTable().fnClearTable();
                            $("#tableOpcionais").dataTable().fnDestroy();

                            getTodas();

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


function pesquisaCodigo(codigo) {
    $.ajax({
        type: "POST",
        url: 'funcoes/funcoesOpcionais.php',
        data: {funcao: "pesquisaCodigo", codigo: codigo},
        success: function (data) {
            var test = JSON.parse(data);

            $('#descricaoEditarOpcional').val(test[0].descricao);

            return test;
        }
    });
}

function salvarAlteracoes() {

    if ($('#descricaoEditarOpcional').val() != null && $('#descricaoEditarOpcional').val() != "") {
        var descricao = $('#descricaoEditarOpcional').val();
        var codigo = $('#idEditarOpcional').val();

        $.ajax({
            type: "POST",
            url: 'funcoes/funcoesOpcionais.php',
            data: {funcao: "salvarAlteracoes", codigo: codigo, descricao: descricao},
            success: function (data) {
                var test = $.trim(data);
                if (test == 'OK') {
                    $('#modalEditarOpcional').modal('hide');

                    $("#tableOpcionais").dataTable().fnClearTable();
                    $("#tableOpcionais").dataTable().fnDestroy();

                    getTodas();

                    $.notify({
                        // options
                        message: 'Alteração executada com sucesso'
                    }, {
                        // settings
                        type: 'success'
                    });
                } else {
                    $('#modalEditarOpcional').modal('hide');
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

    } else {
        $("#erroAlteracaoDescricaoVazia").show();
    }



}

function inserirNovoOpcional() {

    var descricao = $("#descricaoOpcional").val();

    if (descricao == null || descricao == "") {
        $.notify({
            // options
            message: 'É necessário inserir uma descrição'
        }, {
            // settings
            type: 'danger'
        });

    } else {

        $.ajax({
            type: "POST",
            url: 'funcoes/funcoesOpcionais.php',
            data: {funcao: "inserir", descricao: descricao},
            success: function (data) {
                var test = $.trim(data);
                if (test == 'OK') {
                    $("#tableOpcionais").dataTable().fnClearTable();
                    $("#tableOpcionais").dataTable().fnDestroy();

                    $("#descricaoOpcional").val("");

                    getTodas();

                    $.notify({
                        // options
                        message: 'Inserção executada com sucesso'
                    }, {
                        // settings
                        type: 'success'
                    });
                } else {
                    $("#descricaoOpcional").val("");

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

