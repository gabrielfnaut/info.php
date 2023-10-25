<?php 


//Média Ponderada 

$media = 6;
$prova = 8;
$peso = 10;
$prova2 = 6;
$peso2 = 8;
$prova3 = 9;
$peso3 = 10;
$numerador = ($prova * $peso) + ($prova2 * $peso2) + ($prova3 * $peso3);
$denominador = ($peso + $peso2 + $peso3);
$mp = $numerador / $denominador;

if ($mp >= $media ) {
    echo "O aluno foi aprovado com a média: {$mp}";
} else {
        echo "O aluno foi reprovado com a média: {$mp}";
} 



echo "<br>";


$media = 6;
$prova = 5;
$peso = 10;
$prova2 = 3;
$peso2 = 8;
$prova3 = 5;
$peso3 = 10;
$numerador = ($prova * $peso) + ($prova2 * $peso2) + ($prova3 * $peso3);
$denominador = ($peso + $peso2 + $peso3);
$mp = $numerador / $denominador;

if ($mp >= $media ) {
    echo "O aluno foi aprovado com a média: {$mp}";
} else {
        echo "O aluno foi reprovado com a média: {$mp}";
}


