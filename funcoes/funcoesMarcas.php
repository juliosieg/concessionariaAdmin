<?php

$funcao = $_POST['funcao'];

switch($funcao){

	case "getTodas":
		getTodas();
		break;

}


function getTodas(){

	include 'conexao.php';

	$conexao = new Conexao(); // Abre conexao
	$sql = "SELECT * FROM marca"; //consulta sql
	$result = $conexao->Executar($sql);

	echo $result;
}


?>