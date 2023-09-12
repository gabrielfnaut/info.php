<?php 
/* calculcar o fatorial de um numero qualquer 
    ex. $numero = 5
    (5!) => 5 * 4 * 3 * 2 * 1 = 120
    dica: utilizar laco de repeticao
    n!=n⋅(n−1)⋅(n−2)⋅…⋅3⋅2⋅1

*/

$num = 6;
$n = 1;
while ($num > 1) {  //numero 6 e maior que 1
    $n *= $num; //$n *= atribuicao com multiplicacao 
    $num-- ; // -- = decremento 

} 

echo "{$n} <br>";
echo "<br>";





