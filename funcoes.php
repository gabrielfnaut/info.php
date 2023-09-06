<?php

/*
function  soma($valor1, $valor2 ) {      //() = condicao
    echo ($valor1 + $valor2) . "<br>";   //{} = logica 
}

soma(2,1); //chamando a funcao 
soma(40,30);


function  subtracao($valor1, $valor2 ) {        
    echo ($valor1 - $valor2) . "<br>"; 
}

subtracao(2,1);
subtracao(40,30);
*/
// --------------------------------------------------------------------- // 

//VALOR DAS VARIAVIES 
$valor1= 10;
$valor2 = 10;
$operador = "**";

//LOGICA DOS OPERADORES
function  calcular($operador, $valor1, $valor2 ) {
    if ($operador == "+" ) {
        return soma($valor1, $valor2); 
    }

    if ($operador == "-" ) {
        return subtracao($valor1, $valor2); 
    }

    if ($operador == "*" ) {
        return multiplicacao($valor1, $valor2); 
    }

    if ($operador == "/" ) {
        return divisao($valor1, $valor2); 
    }

    if ($operador == "**" ) {
        return exponenciacao($valor1, $valor2); 
    }

}

//LOGICA DO CALCULO
function soma($valor1, $valor2) {
    if ($valor1 == 0) {
        return $valor1;
    }
    return $valor1 + $valor2;
}

function  subtracao($valor1, $valor2 ) {        
    return $valor1 - $valor2;
}

function  multiplicacao($valor1, $valor2 ) {        
    return $valor1 * $valor2;
}

function  divisao($valor1, $valor2 ) {        
    return $valor1 / $valor2;
}

function  exponenciacao($valor1, $valor2 ) {        
    return $valor1 ** $valor2;
}


//LOGICA DO RESULTADO
function exibirResultado($resultado) {
    echo $resultado . "<br>";
}

$resultado = calcular($operador, $valor1, $valor2);

exibirResultado($resultado);
