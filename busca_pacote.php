<?php
session_start();
header("Access-Control-Allow-Origin: *");
require_once ("nusoap.php");

$data = $_POST;

$id = $_POST["destino"];

$cliente = new nusoap_client("https://ancoradouro.com.br/mondiale/webservice/service.php?wsdl");

$parametros = array('login'=>'mendestur','senha'=>'@1D2#$65par#');

$resultado = $cliente->call('getUser',$parametros);

$chave = $resultado['chave'];

$parametros2 = array($chave,$id);
$resultado_pacotes = $cliente->call("getPacotes",$parametros2);

$_SESSION["pacotes"] = $resultado_pacotes;

header("Content-type:application/json");
echo json_encode($resultado_pacotes);