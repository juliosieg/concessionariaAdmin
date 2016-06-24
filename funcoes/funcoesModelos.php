<?php

$funcao = $_POST['funcao'];

if (isset($_POST['codigo'])) {
    $codigo = $_POST['codigo'];
}

if (isset($_POST['descricao'])) {
    $descricao = $_POST['descricao'];
}

if (isset($_POST['marca'])) {
    $marca = $_POST['marca'];
}

if (isset($_POST['categoria'])) {
    $categoria = $_POST['categoria'];
}

switch ($funcao) {

    case "getTodos":
        getTodos();
        break;
    case "excluir":
        excluir($codigo);
        break;
    case "pesquisaDadosEdicao":
        pesquisaDadosEdicao($codigo);
        break;
    case "salvarAlteracoes":
        salvarAlteracoes($codigo, $descricao, $marca, $categoria);
}

function getTodos() {

    include 'conexao.php';

    $conexao = new Conexao(); // Abre conexao
    $conexao->Conexao();
    $conexao->Executar("select m.id, m.descricao as descModelo, ma.descricao as descMarca, ca.descricao as descCategoria from modelo m"
            . " inner join marca ma"
            . " on ma.id = m.id_marca"
            . " inner join categoria ca"
            . " on ca.id = m.id_categoria");
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

function pesquisaDadosEdicao($codigo) {
    include 'conexao.php';

    $conexao = new Conexao(); // Abre conexao
    $conexao->Conexao();
    $sql = "select * from modelo where id = " . $codigo;
    $conexao->Executar($sql);
    $result = $conexao->MontarResultados();
    $conexao->Liberar();
    $conexao->Fechar();
    $json = json_encode($result);

    echo $json;
}

function salvarAlteracoes($codigo, $descricao, $marca, $categoria) {

    include 'conexao.php';

    $conexao = new Conexao();
    $conexao->Conexao();

    try {
        $sql = "update modelo set descricao = '" . $descricao . "', id_marca = " . $marca . ","
                . "id_categoria = " . $categoria . " where id = " . $codigo;
        $conexao->Executar($sql);
        echo 'OK';
    } catch (Exception $e) {
        echo 'Erro ao alterar modelo: ', $e->getMessage(), "\n";
    }

    $conexao->Liberar();
    $conexao->Fechar();
}
?>

