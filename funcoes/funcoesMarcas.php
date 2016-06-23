<?php

$funcao = $_POST['funcao'];

if(isset($_POST['codigo'])){
    $codigo = $_POST['codigo'];
}

if(isset($_POST['descricao'])){
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
}

function getTodas() {

    include 'conexao.php';

    $conexao = new Conexao(); // Abre conexao
    $conexao->Conexao();
    $conexao->Executar("select * from marca order by descricao");
    $result = $conexao->MontarResultados();
    $conexao->Liberar();
    $conexao->Fechar();
    $json = json_encode($result);

    echo $json;
}

function pesquisaCodigo($codigo){

    include 'conexao.php';

    $conexao = new Conexao(); // Abre conexao
    $conexao->Conexao();
    $sql = "select * from marca where id = ".$codigo;
    $conexao->Executar($sql);
    $result = $conexao->MontarResultados();
    $conexao->Liberar();
    $conexao->Fechar();
    $json = json_encode($result);

    echo $json;

}


function salvarAlteracoes($codigo, $descricao){

    include 'conexao.php';

    $conexao = new Conexao();
    $conexao->Conexao();

    try{
        $sql = "update marca set descricao = '".$descricao."' where id = ".$codigo;
        $conexao->Executar($sql);
        echo 'OK';
    }catch (Exception $e){
        echo 'Erro ao alterar marca: ',  $e->getMessage(), "\n";
    }


}


?>

