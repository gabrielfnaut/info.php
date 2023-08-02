<?php

/* 
+ (adição)
- (subtração)
* (multiplicação)
/ (divisão)
** (exponenciação)
numpar (núemero par) % 
perc (percentual desconto) 
perc+ (percentual acrécimo)
*/

$value = "4";
$value2 = "2";
$operation = "numpar";
$result = 0 ;

if ($operation == "+") {  
    $result = $value + $value2 ; 
} 

if ($operation == "-") {
    $result = $value - $value2 ;
}

if ($operation == "/") {
    $result = $value / $value2 ;
}

if ($operation == "*") {
    $result = $value * $value2 ; 
}

if ($operation == "**" ) {
    $result = $value ** $value2 ;
}

if ($operation == "numpar" ) {
    $par = $value % 2 ; // 0 || 1...
    $par2 = $value2 % 2 ;
    $saopares = ($par == 0 && $par2 == 0) ; // true || false

if ($saopares) {
    echo "Os valores informados sãp pares.  ";
}
}  


if ($operation == "perc") {
    $result = $value - ($value * $value2) / 100 ;   
}

if ($operation == "perc+") {
    $result = ($value * $value2) / 100 ; 
}




if ($operation == "mmc");






echo $result;









