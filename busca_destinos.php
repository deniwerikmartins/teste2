<?php
header("Access-Control-Allow-Origin: *");
require_once ("nusoap.php");

$cliente = new nusoap_client("https://ancoradouro.com.br/mondiale/webservice/service.php?wsdl");

$parametros = array('login'=>'mendestur','senha'=>'@1D2#$65par#');

$resultado = $cliente->call('getUser',$parametros);

$chave = $resultado['chave'];

$parametros2 = array($chave,0);
$resultado2 = $cliente->call('getContinente',$parametros2);

$paises = array();
foreach ($resultado2 as $key => $value){
    $params = array($chave,$value['id']);
    $resultado_pais = $cliente->call('getPais',$params);
    foreach ($resultado_pais as $key2 => $value2){
        array_push($paises,$value2);
    }
}

header("Content-type:application/json");
echo json_encode($paises);
