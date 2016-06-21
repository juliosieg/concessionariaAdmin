<?php

$funcao = $_POST['funcao'];

switch($funcao){

	case "getFacebookCounter":
		getCounterFacebook();
		break;

}


function getCounterFacebook(){

	//Teste com página do Himundo, deve ser alterado para pegar valor correto
	//Para alterar, tem que alterar o valor da variavel fid
	//Para pegar o id de uma pagina, da pra usar o seguinte site: http://findmyfbid.com/
	//Exemplo - https://www.facebook.com/himundo = 770555776396053

	$fid = '770555776396053';

	$url = 'http://api.facebook.com/method/fql.query?format=json&query=select+fan_count,name+from+page+where+page_id%3D'.$fid;

	$data = file_get_contents($url);

	$decode = json_decode($data, true);

	$result = $decode[0]['fan_count'];

	echo $result;
}


?>