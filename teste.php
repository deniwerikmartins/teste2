<?php

include ('nusoap.php');

$cliente = new nusoap_client("https://ancoradouro.com.br/mondiale/webservice/service.php?wsdl");

$parametros = array('login'=>'mendestur','senha'=>'@1D2#$65par#');

$resultado = $cliente->call('getUser',$parametros);
//var_dump($resultado);
$chave = $resultado['chave'];
echo"CHAVE";
echo"<br>";
echo $chave;
echo"<br>";
$parametros2 = array($chave,0);
$resultado2 = $cliente->call('getContinente',$parametros2);
echo"<br>";
echo"CONTINENTES";
echo"<br>";
var_dump($resultado2);
echo"<br>";
echo"PAISES";
echo"<br>";

$ids_paises = array();
foreach ($resultado2 as $key => $value){
    $params = array($chave,$value['id']);
    $resultado_pais = $cliente->call('getPais',$params);
    var_dump($resultado_pais);
    foreach ($resultado_pais as $key2 => $value2){
        array_push($ids_paises,$value2['id']);
    }

}
echo"<br>";

echo("PACOTES<br>");
$pacotes = array();
foreach ($ids_paises as $id ){
    $params2 = array($chave,$id);
    $resultado_pacotes = $cliente->call("getPacotes",$params2);
    array_push($pacotes,$resultado_pacotes);
    var_dump($resultado_pacotes);
}

foreach ($pacotes as $key => $value){
    foreach ($value as $key2 => $value2){
        $data = $value2["saida"];
        $tamanho = strlen($data);
        $tamanho = ($tamanho * (-1));
        $data_pacote = substr($data,$tamanho,10);
        $x = substr($data,-10);
    }

}
?>