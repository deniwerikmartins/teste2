<?php
header("Access-Control-Allow-Origin: *");
require_once ("nusoap.php");

$day = $_POST["data"];

$day = new DateTime($day);

$error = 0;
$vencidos = 0;
$validos = 0;
$cliente = new nusoap_client("https://ancoradouro.com.br/mondiale/webservice/service.php?wsdl");

$parametros = array('login'=>'mendestur','senha'=>'@1D2#$65par#');

$resultado = $cliente->call('getUser',$parametros);

$chave = $resultado['chave'];

$parametros2 = array($chave,0);
$resultado2 = $cliente->call('getContinente',$parametros2);

$continentes = array();

if ($resultado2 == "" || $resultado2 == null || empty($resultado2) || !isset($resultado2) || count($resultado2) <= 0){
    $erro = $php_errormsg;
    $error++;
}

foreach ($resultado2 as $key => $value){
    $continentes[$value["nome"]]["id"] = $value["id"];
    $continentes[$value["nome"]]["nome"] = $value["nome"];
    $continentes[$value["nome"]]["url"] = $value["url"];
}


$paises = array();
$pacotes = array();

if ($continentes == "" || $continentes == null || empty($continentes) || !isset($continentes) || count($continentes) <= 0){
    $erro = $php_errormsg;
    $error++;
}

foreach ($continentes as $key => $value){
    $params = array($chave,$value['id']);
    $resultado_pais = $cliente->call('getPais',$params);
    $ids = array();

    if ($resultado_pais == "" || $resultado_pais == null || empty($resultado_pais) || !isset($resultado_pais) || count($resultado_pais) <= 0){
        $erro = $php_errormsg;
        $error++;
    }

    foreach ($resultado_pais as $key2 => $value2){
        // array_push($paises,$value2);
        $paises[$value2["nome"]]["id"] = $value2["id"];
        $paises[$value2["nome"]]["nome"] = $value2["nome"];
        $paises[$value2["nome"]]["url"] = $value2["url"];

        $continentes[$key]["paises"][$value2["nome"]] = $value2;

        /*foreach ($continentes[$key][$value2["nome"]] as $key3 => $value3){*/

        array_push($ids,$value2["id"]);
        /*foreach ($resultado_pais as $key3 => $value3){
            //$x = $value3;
            //$continentes[$key][$value2["nome"]][$key3] = $value3;
            array_push($ids,$value3["id"]);
        }*/

        /*foreach ($ids as $key4 => $value4){
            $params2 = array($chave,$value4);
            $resultado_pacotes = $cliente->call("getPacotes",$params2);
            foreach ($resultado_pacotes as $key5 => $value5){
                $continentes[$key][$value2["nome"]]["pacotes"][$key5] = $value5;
            }
        }*/
        //$x = count($continentes[$key][$value2["nome"]]);
        //echo (count($continentes[$key][$value2["nome"]]));
    }

    if ($resultado_pais == "" || $resultado_pais == null || empty($resultado_pais) || !isset($resultado_pais)  || count($resultado_pais) <= 0){
        $erro = $php_errormsg;
        $error++;
    }

    foreach ($resultado_pais as $key4 => $value4){
        $params2 = array($chave,$value4["id"]);
        $resultado_pacotes = $cliente->call("getPacotes",$params2);

        if ($resultado_pacotes !== "" && $resultado_pacotes !== null && !empty($resultado_pacotes) && isset($resultado_pacotes) && count($resultado_pacotes) > 0){
            foreach ($resultado_pacotes as $key5 => $value5){
                $saida = $value5["saida"];
                $saida = substr($saida,-10);
                $saida = str_replace(".","/",$saida);
                $dia = substr($saida,0,2);
                $mes = substr($saida,3,2);
                $ano = substr($saida,6,4);

                if ($ano == "2018"){
                    $valid = true;
                }

                $date = $value5["data"];
                $date = new DateTime($date);

                if ($day >= $date){
                    if (is_numeric($dia) && is_numeric($mes) && is_numeric($ano)){
                        $data = $ano . "/" . $mes . "/" . $dia;
                        $inicial = strpos($data,"/");
                        $final = strrpos($data,"/");
                        if ($inicial === 4 && $final === 7){
                            $data = new DateTime($data);
                        }
                    } else {
                        $data = null;
                    }
                    if (isset($data) && $data !== null && $day <= $data){
                        $continentes[$key]["paises"][$value4["nome"]]["pacotes"][$key5] = $value5;
                        $validos++;
                    } else if (!isset($data) && $day >= $date || $data === null && $day >= $date ){
                        $continentes[$key]["paises"][$value4["nome"]]["pacotes"][$key5] = $value5;
                        $validos++;
                    } else {
                        $vencidos++;
                    }

                } else {
                    $error++;
                }








                //$continentes[$key][$value4["nome"]]["pacotes"][$key5] = $value5;

            }
        } else {
            $error++;
        }


    }
}


header("Content-type:application/json");
echo json_encode($continentes);
