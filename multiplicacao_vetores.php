<?php 
/* 
multiplicar um vetor $A por um vetor $B e salvar o produto dessa multiplicacao em um novo vetor chamado $resultado;

$a = [2, 3, 4];
$b = [5, 6, 7];
$resultado = $a x $b;
$resultado = [10,18,28]
*/



$a = [2, 3, 4];  //a array conta ate 3
$b = [5, 6, 7];
$result = [];

for ($i= 0; $i <count($a); $i++ ) {   // <count = contador, $a possui 3 numeros, entao ele conta ate 3
    $produto = $a[$i] * $b[$i];
    array_push($result, $produto); // array_push adiciona elementos ao final de um array

}

$result_string = implode(", ", $result); //Implode = retorna uma string contendo os elementos da matriz na mesma ordem com uma ligação entre cada elemento
echo "O produto da multiplicacao dos vetores e {$result_string} <br>";

   

//exemplo de contador funcionando mesmo errado 
$a = [2, 3, 4, 6]; //a array conta ate 4
$b = [5, 6, 7];
$result = [];

for ($i= 0; $i <count($b); $i++ ) {   // <count = contador, $a possui 3 numeros, entao ele conta ate 3
    $produto = $a[$i] * $b[$i];
    array_push($result, $produto);

}

$result_string = implode(", ", $result);
echo "O produto da multiplicacao dos vetores e {$result_string} <br>";


//exemplo de contador errado 
$a = [2, 3, 4, 6]; //a array conta ate 4
$b = [5, 6, 7];
$result = [];

for ($i= 0; $i <count($a); $i++ ) {   // <count = contador, $a possui 3 numeros, entao ele conta ate 3
    $produto = $a[$i] * $b[$i]; 
    array_push($result, $produto);

}

$result_string = implode(", ", $result);
echo "O produto da multiplicacao dos vetores e {$result_string}";

