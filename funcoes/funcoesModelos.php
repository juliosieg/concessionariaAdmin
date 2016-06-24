<?php

$funcao = $_POST['funcao'];

if (isset($_POST['codigo'])) {
    $codigo = $_POST['codigo'];
}

switch ($funcao) {

    case "getTodos":
        getTodos();
        break;
    case "excluir":
        excluir($codigo);
        break;
}

function getTodos() {

    include 'conexao.php';

    $conexao = new Conexao(); // Abre conexao
    $conexao->Conexao();
    $conexao->Executar("select * from modelo order by descricao");
    $result = $conexao->MontarResultados();
    $conexao->Liberar();
    $conexao->Fechar();
    $json = json_encode($result);

    echo $json;
}

function excluir($codigo) {
    include 'conexao.php';

    $conexao = new Conexao();
    $conexao->Conexao();

    try {
        $sql = "delete from modelo where id = " . $codigo;
        $conexao->Executar($sql);
        echo 'OK';
    } catch (Exception $e) {
        echo 'Erro ao excluir marca: ', $e->getMessage(), "\n";
    }

    $conexao->Liberar();
    $conexao->Fechar();
}
?>

