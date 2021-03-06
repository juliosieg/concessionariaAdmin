<?php

$funcao = $_POST['funcao'];

if (isset($_POST['codigo'])) {
    $codigo = $_POST['codigo'];
}

if (isset($_POST['descricao'])) {
    $descricao = $_POST['descricao'];
}

switch ($funcao) {

    case "getTodas":
        getTodas();
        break;
    case "pesquisaCodigo":
        pesquisaCodigo($codigo);
        break;
    case "salvarAlteracoes":
        salvarAlteracoes($codigo, $descricao);
        break;
    case "excluir":
        excluir($codigo);
        break;
    case "inserir":
        inserir($descricao);
        break;
}

function getTodas() {

    include 'conexao.php';

    $conexao = new Conexao(); // Abre conexao
    $conexao->Conexao();
    $conexao->Executar("select * from opcionais order by descricao");
    $result = $conexao->MontarResultados();
    $conexao->Liberar();
    $conexao->Fechar();
    $json = json_encode($result);

    echo $json;
}

function pesquisaCodigo($codigo) {

    include 'conexao.php';

    $conexao = new Conexao(); // Abre conexao
    $conexao->Conexao();
    $sql = "select * from opcionais where id = " . $codigo;
    $conexao->Executar($sql);
    $result = $conexao->MontarResultados();
    $conexao->Liberar();
    $conexao->Fechar();
    $json = json_encode($result);

    echo $json;
}

function salvarAlteracoes($codigo, $descricao) {

    include 'conexao.php';

    $conexao = new Conexao();
    $conexao->Conexao();

    try {
        $sql = "update opcionais set descricao = '" . $descricao . "' where id = " . $codigo;
        $conexao->Executar($sql);
        echo 'OK';
    } catch (Exception $e) {
        echo 'Erro ao alterar opcional: ', $e->getMessage(), "\n";
    }

    $conexao->Liberar();
    $conexao->Fechar();
}

function excluir($codigo) {

    include 'conexao.php';

    $conexao = new Conexao();
    $conexao->Conexao();

    try {
        $sql = "delete from opcionais where id = " . $codigo;
        $conexao->Executar($sql);
        echo 'OK';
    } catch (Exception $e) {
        echo 'Erro ao excluir opcional: ', $e->getMessage(), "\n";
    }

    $conexao->Liberar();
    $conexao->Fechar();
}

function inserir($descricao) {

    include 'conexao.php';

    $conexao = new Conexao();
    $conexao->Conexao();
    try{
        $sql = "insert into opcionais(descricao) values('".$descricao."')";
        $conexao->Executar($sql);
        echo 'OK';
    }catch(Exception $e){
        echo $e;
    }
    $conexao->Liberar();
    $conexao->Fechar();
}
?>

