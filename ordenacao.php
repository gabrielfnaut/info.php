<?php
//Encontrar o maior valor em um conjunto de numeros em um array
//Exibir esse valor ao final para o usuario 


/*
$nums = [500, 1000, 17, 1117, 100, 32732, 1]; //array de numeros 
$max = $nums[0];       //inicializa o maior numero com o primeiro elemento da array, ou seja: 500
$min = $nums[0];


for ($i= 0; $i < count($nums); $i++ ) {  //$i equivale a 0; $i for menor que (count)=contador{conta os numeros dentro da array}; $i++(incremento)
    //Maior numero ---------------------    
    if ($nums[$i] > $max) {     //SE $nums && $i for maior que $max 
        $max = $nums[$i];     //atualiza o maior numero se encontrar um valor maior
    }

    //Menor numero ---------------------
        if ($nums[$i] < $max) {    //SE $nums && $i for menor que $max 
            $min = $nums[$i];     //atualiza o menor numero se encontrar um valor menor
        }
}

echo " O maior numero da array e: {$max} <br>";
echo " O menor numero da array e: {$min}";


/*
2- por meio da tecnica de ordenacao bubble sort,
ordene o array abaixo em ordem cerscente.
Dica: Utilize o laco de repeticao FOR, pode ser necessario mais de um e utilizar IF
*/

$nums = [500, 1000, 17, 1117, 100, 32732, 1];

for ($i= 0; $i < count($nums); $i++ ) {
    if ($nums[$i] > $max) { 
        $max = $nums[$i];   
    }


    
}