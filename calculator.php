<?php

// + - * /

$value = "2";
$value2 = "2";
$operation = "+";
$result = 0 ;

if ($operation == "+") {  
    $result = $value + $value2 ; // 4  
} 

if ($operation == "-") {
    $result = $value - $value2 ; // 0
}

if ($operation == "/") {
    $result = $value / $value2 ; // 1
}

if ($operation == "*") {
    $result = $value * $value2 ; // 4
}

echo $result;




