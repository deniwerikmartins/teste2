<?php
/**
 * Created by PhpStorm.
 * User: PXP DIGITAL
 * Date: 05/06/2018
 * Time: 16:19
 */

$Precos = array();
$Precos[0]["Nome"] = "Azul";
$Precos[0]["TotalGeral"] = 604.49;

$Precos[1]["Nome"] = "Azul";
$Precos[1]["TotalGeral"] = 604.49;

$Precos[2]["Nome"] = "Azul";
$Precos[2]["TotalGeral"] = 800.63;

$Precos[3]["Nome"] = "Gol";
$Precos[3]["TotalGeral"] = 756.5;

$Precos[4]["Nome"] = "Gol";
$Precos[4]["TotalGeral"] = 629.86;

$Precos[5]["Nome"] = "Gol";
$Precos[5]["TotalGeral"] = 629.86;

$Precos[6]["Nome"] = "Gol";
$Precos[6]["TotalGeral"] = 669.55;

$Precos[7]["Nome"] = "Gol";
$Precos[7]["TotalGeral"] = 669.55;

$Precos[8]["Nome"] = "Avianca";
$Precos[8]["TotalGeral"] = 533.15;

$Precos[9]["Nome"] = "Avianca";
$Precos[9]["TotalGeral"] = 658.29;

$Precos[10]["Nome"] = "Latam";
$Precos[10]["TotalGeral"] = 817.1;

$Precos[11]["Nome"] = "Latam";
$Precos[11]["TotalGeral"] = 1432.49;

$Precos[12]["Nome"] = "Latam";
$Precos[12]["TotalGeral"] = 1432.49;

$i = 0;
$melhoresPrecos = array();
$Precos2 = $Precos;
foreach ($Precos as $key => $value) {

    //echo("key :" . $key);
    //echo ($value["Nome"]);
    //echo ($value["TotalGeral"]);

    foreach ($Precos2 as $chave => $valor) {
        if ($value["Nome"] === $valor["Nome"]) {
            if ($valor["TotalGeral"] < $value["TotalGeral"]) {
                $melhoresPrecos[$i]["Nome"] = $valor["Nome"];
                $melhoresPrecos[$i]["TotalGeral"] = $valor["TotalGeral"];
                $i++;
            }
        } else {


        }
    }
}

$melhoresPrecos = array_unique($melhoresPrecos, SORT_REGULAR);
array_multisort($melhoresPrecos);
$mp2 = $melhoresPrecos;

$indices = array();
foreach ($mp2 as $key => $value){
    $nome = $value["Nome"];
    foreach ($mp2 as $chave => $valor){
        if ($nome === $valor["Nome"]){
            if ($value["TotalGeral"] > $valor["TotalGeral"]){
                array_push($indices,$key);

            }
        }
    }
}
$indices = array_unique($indices);
foreach ($indices as $value){
    $removido = array_splice($mp2,$value,1);
}

echo("");
