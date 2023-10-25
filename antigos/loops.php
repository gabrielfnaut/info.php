<?php


//For /While/ Do While


for ($c = 0; $c <10; $c++ ) {
    echo 'For: o valor do c é: $c '. $c. '<br>' ;
}



$c = 0; 
while ($c <10) {
    echo 'While: o valor do c é: $c '. $c. '<br>' ;
    $c++;
}



$c = 0; 
do {
    echo "Do While: o valor do c é: {$c}<br>";
    $c++;
} while ($c < 10);



$c = 11; 
do {
    echo "Do While/erro: o valor do c é: {$c}<br>";
    $c++;
} while ($c < 10);





//Tabuada do 4 com for
$num = 4; 

for($c = 0; $c <= 10; $c++) {
    echo "{$num} * {$c} =" .($num * $c) . '<br>' ;
}




//Tabuada do 7 com while 
$num = 7; 

$c = 0; 
while ($c <=10) {
    echo "{$num} * {$c} =" .($num * $c) . '<br>' ;
    $c++;
}



//Tabuada do 9 com do while 
$num = 9; 

$c = 0; 
do {
    echo "{$num} * {$c} =" .($num * $c) . '<br>' ;
    $c++;
} while ($c <= 10);



