<?php

$dataStr = "42/13/2003";
$data = explode("/", $dataStr);
$dia = (int) $data [0];
$mes = (int) $data [1];
$ano = (int) $data [2]; // (int) = 2003  / Sem (int) = "2003"

$meses30dias = [4, 6, 9, 11];
$meses31dias = [1, 3, 5, 7, 8, 10, 12];


function anoBissexto($ano) {
    if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
        return true;
    } else {
        return false;
    }
}


if (anoBissexto($ano)) {
    echo "$dataStr é um ano bissexto" . "<br>";
} else {
    echo "$dataStr não é um ano bissexto" . "<br>";
}


//AJUSTE PARA DIAS INVALIDOS 
if ($dia < 1 || $dia > 31) {
    $dia = 1;
}

//AJUSTE PARA MESES INVALIDOS 
if ($mes < 1 || $mes > 12) {
    $mes = 1;
}

if ($mes == 2 && $dia >= 28) {
    $dia = 28;
    
    if (anoBissexto($ano)) {
        $dia = 29;
    }
}

if (in_array($mes, $meses30dias) && $dia > 30) {
    $dia = 1;
    $mes += 1;
}




