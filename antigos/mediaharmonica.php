<?php

//Media Harmonica

$media = 6;
$valor = 5;
$a = 1;
$b = 2;
$b2 = 3;
$b3 = 5;
$b4 = 6;
$b5 = 9;

$numerador = ($valor);
$denominador = ($a / $b) + ($a / $b2) + ($a / $b3) + ($a / $b4) + ($a / $b5);
$mh = $numerador / $denominador;

if ($mh >= $media) {
    echo " O resultado é  {$mh} ";
} else { 
        echo " O resultado é {$mh} ";
}

