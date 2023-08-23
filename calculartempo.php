<?php

/*

$dataatual = date ('d/m/Y  H:i:s'); // 22/08/2023  20:06:32

$acrescimos = 5;
$horainicial = '16:00:00';
$horafinal = '17:30:00';


// inicial
$arrhora = explode(":", $horainicial);

$horainicial = $arrhora [0];
$minutosinicial = $arrhora [1];
$segundosinicial = $arrhora [2];

$horainicialemsegundos = $horainicial * 3600;
$minutosinicialemsegundos = $minutosinicial * 60;
$totalinicialemsegundos = $horainicialemsegundos + $minutosinicialemsegundos + $segundosinicial;

// final
$arrhora = explode(":", $horafinal);

$horafinal = $arrhora [0];
$minutosfinal = $arrhora [1];
$segundosfinal = $arrhora [2];

$horafinalemsegundos = $horafinal * 3600;
$minutosfinalemsegundos = $minutosfinal * 60;
$totalfinalemsegundos = $horafinalemsegundos + $minutosfinalemsegundos + $segundosfinal;


// tempo de jogo
$total = ($totalfinalemsegundos - $totalinicialemsegundos) / 60;
echo "o tempo de jogo é de: {$total} minutos";


// acrescimos
$acrescimos = 5;

*/




// Jogo comeca em um dia e termina no outro 

$dataatual = date ('d/m/Y  H:i:s'); // 22/08/2023  20:06:32

// inicial
$acrescimos = 5;
$horainicial = "23:00:00";
$horafinal = "00:30:00";

$arrhora = explode(":", $horainicial);
$horainicial = $arrhora [0];
$minutosinicial = $arrhora [1];
$segundosinicial = $arrhora [2];

$horainicialemsegundos = $horainicial * 3600;
$minutosinicialemsegundos = $minutosinicial * 60;
$totalinicialemsegundos = $horainicialemsegundos + $minutosinicialemsegundos + $segundosinicial;

$datainicial = "12/11/2023";
$datafinal = "13/11/2023";

$arrdata = explode("/", $datainicial);
$diainicial = $arrdata [0];
$mesinicial = $arrdata [1];
$anoinicial = $arrdata [2];


// final
$arrhora = explode(":", $horafinal);
$horafinal = $arrhora [0];
$minutosfinal = $arrhora [1];
$segundosfinal = $arrhora [2];

$horafinalemsegundos = $horafinal * 3600;
$minutosfinalemsegundos = $minutosfinal * 60;
$totalfinalemsegundos = $horafinalemsegundos + $minutosfinalemsegundos + $segundosfinal;

$arrdata = explode("/", $datafinal);
$diafinal = $arrdata [0];
$mesfinal = $arrdata [1];
$anofinal = $arrdata [2];




// tempo de jogo
$total = ($totalfinalemsegundos - $totalinicialemsegundos) / 60;
echo "o tempo de jogo é de: {$total} minutos";