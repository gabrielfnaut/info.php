<?php 
/* calculcar o fatorial de um numero qualquer 
    ex. $numero = 5
    (5!) => 5 * 4 * 3 * 2 * 1 = 120
    dica: utilizar laco de repeticao
    n!=n⋅(n−1)⋅(n−2)⋅…⋅3⋅2⋅1



$num = 6;
$n = 1;
while ($num > 1) {  //numero 6 e maior que 1
    $n *= $num; //$n *= atribuicao com multiplicacao 
    $num-- ; // -- = decremento 

} 

echo "{$n} <br>";
echo "<br>";

*/


function isBissexto($ano) {
    if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
        return true;
    } else {
        return false;
    }
}

// Testando alguns anos
$ano1 = 2015;


if (isBissexto($ano1)) {
    echo "$ano1 é um ano bissexto.<br>";
} else {
    echo "$ano1 não é um ano bissexto.<br>";
}

