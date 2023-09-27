<?php
//Encontrar o maior valor em um conjunto de numeros em um array
//Exibir esse valor ao final para o usuario 


$nums = [500, 999, 17, 7, 100, 32732, 1, 77, 54, 277]; //array de numeros 
$max = $nums[0];       //inicializa o maior numero com o primeiro elemento da array, ou seja: 500
$min = $nums[0];


for ($i= 0; $i < count($nums); $i++ ) {  //$i equivale a 0; $i for menor que (count)=contador{conta os numeros dentro da array}; $i++(incremento)
    //Maior numero ---------------------    
    if ($nums[$i] > $max) {     //SE $nums && $i for maior que $max 
        $max = $nums[$i];     //atualiza o maior numero se encontrar um valor maior
    }
}

    //Menor numero ---------------------
for ($i= 0; $i < count($nums); $i++ ) {  
    if ($nums[$i] < $min) {    //SE $nums && $i for menor que $max 
            $min = $nums[$i];     //atualiza o menor numero se encontrar um valor menor
        }
}

echo " O maior numero da array e: {$max} <br> <br>";

echo " O menor numero da array e: {$min} <br> <br>";


/*
2- por meio da tecnica de ordenacao bubble sort,
ordene o array abaixo em ordem cerscente.
Dica: Utilize o laco de repeticao FOR, pode ser necessario mais de um e utilizar IF


$nums = [500, 1000, 17, 1117, 100, 32732, 1];
    
for ($i= 0; $i < count($nums); $i++ ) {
    for ($j= 0; $j < count($nums) - 1; $j++) {
        if($nums[$j] > $nums[$j + 1]){
          
            $a = $nums[$j];
            $nums[$j] = $nums[$j + 1];
            $nums[$j + 1] = $a;
        }
    }
}


echo "array crescente: {$a} <br>"; 
  
*/


//--------------------------------------------------------------------------------------------------
//for | while | foreach | implode, explode || pesquisar sobre oq cada uma faz e para q serve 
//--------------------------------------------------------------------------------------------------


for ($i = 0; $i < count($nums); $i++) {
    for ($j = 0; $j < count($nums) - 1; $j++) {
        if ($nums[$j] > $nums[$j + 1]) {
            
            $a = $nums[$j];                     
            $nums[$j] = $nums[$j + 1];
            $nums[$j + 1] = $a;
        }
    }
}

echo "Array ordenado em ordem crescente: ";
foreach ($nums as $num) {
    echo $num . ", ";
}
echo "<br>";
echo "<br>";

//O echo de cima eh igual ao echo de baixo mas escrito de outra forma 

echo "Array ordenado em ordem crescente: ";
for ($i = 0; $i < count($nums); $i++) {
    echo $nums[$i] . ", ";
} 

echo "<br>";
echo "<br>";

//--------------------------------------------------------------------------------------------------------------------------
//Remover os valores duplicados de um array

$frutas = [
    "maca",
    "banana",
    "laranja",
    "banana",
    "uva",
    "maca",
];

$frutas2 = [];

for ($i = 0; $i < count($frutas); $i++) {
   $valor = $frutas[$i];
   $duplicado = false;
   
   
    for ($j = 0; $j < count($frutas2); $j++) {
        if ($valor == $frutas2[$j]) {
            $duplicado = true;
break;

        }
    }
        if (!$duplicado){
            $frutas2[] = $valor;
        }
}


echo "Frutas: ";
for ($i = 0; $i < count($frutas2); $i++) {
    echo $frutas2[$i] . ", ";
} 

echo "<br> <br>";


//--------------------------------------------------------------------------------------------------------------------------
//Contar os valores duplicados de um array

