<?php

$dataStr = "19/09/2023";
$data = explode("/", $dataStr);
$dia = (int) $data [0];
$mes = (int) $data [1];
$ano = (int) $data [2]; // (int) = 2003  / Sem (int) = "2003"

$meses30dias = [4, 6, 9, 11];
$meses31dias = [1, 3, 5, 7, 8, 10, 12];

// --------------------------------------------------------------------
//CALCULO DE ANO BISSEXTO
function anoBissexto($ano) {
    if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
        return true;
    } else {
        return false;
    }
}                                                               
// --------------------------------------------------------------------


//AJUSTE PARA DIAS INVALIDOS 
if ($dia < 1 || $dia > 31) {     // $dia menor que 1 E $dia maior que 31 
    $dia = 1;                    // $dia eh igual a 1
}

//AJUSTE PARA MESES INVALIDOS 
if ($mes < 1 || $mes > 12) {
    $mes = 1;
}

if ($mes == 2 && $dia >= 28) {   //se $mes for exatamente 2 e $dia for maior ou igual a 28
    $dia = 28;
    
    if (anoBissexto($ano)) {     //em anos bissextos o mes 2 possui 29 dias
        $dia = 29;
    }
}

if (in_array($mes, $meses30dias) && $dia > 30) {    
    $dia = 1;
    $mes += 1;
}


$bissextoStr = "O ano {$ano} NAO e bissexto.";

if (anoBissexto($ano)) {
    $bissextoStr = "O ano {$ano} E bissexto.";
} 


$dataStr = "{$dia}/{$mes}/{$ano}"; 

echo "A data informada {$dataStr}. {$bissextoStr}";
