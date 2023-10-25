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
$valor1= 2015;
$valor2 = 2;
$operador = "@@";

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

    if ($operador == "%" ) {
        return moduloDivisao($valor1, $valor2); 
    }

    if ($operador == '^') {
        return pot($valor1, $valor2);
    }

    function numeroPar($valor1) {
        $resto = moduloDivisao($valor1, 2);
    
        if ($resto == 0) {
            $par = 1;
        } else {
            $par = 0;
        }
    
        return $par;
    }

    if ($operador == '!!') {
        return numeroPar($valor1);
    }
    
    if ($operador == '@@') {
        return numeroAnoBissexto($valor1);
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

function  moduloDivisao($valor1, $valor2 ) {        
    return $valor1 % $valor2;
}

function pot($valor1, $valor2) {

    return pow($valor1, $valor2); // pow = potencia 
}

//--------------------------

function numeroAnoBissexto($valor1) {
    if (($valor1 % 4 == 0 && $valor1 % 100 != 0) || ($valor1 % 400 == 0)) {
        return true;
    } else {
        return false;
    }
}

//--------------------------

//LOGICA DO RESULTADO
function exibirResultado($resultado) {
    echo $resultado . "<br>";
}


exibirResultado($resultado);

function exibirResultadoLogico($resultado, $valor1) {
    
    if ($resultado == 1) {
        $situacao = "par";
    } else {
        $situacao = "impar";
    }

    echo "O numero informado({$valor1}) é {$situacao}" . "<br>";
   
// -----------------------



    if (numeroAnoBissexto($valor1)) {
        echo "$valor1 é um ano bissexto.<br>";
    } else {
        echo "$valor1 não é um ano bissexto.<br>";
    }

}

//-------------------------


function verificarTipoOperador($operador, $resultado, $valor1) {
        /*
        '!!' = verificar par
        '##' = verifica primos
        '@@' = verifica se o $valor1 se ele é um ano bissexto.
    */ 
    $operadoresLogicos = [
        '!!',
        '##',
        '@@'
    ];

    if (in_array($operador, $operadoresLogicos)) {
        return exibirResultadoLogico($resultado, $valor1);
    } else {
        return exibirResultado($resultado);
    }

   
 
}

$resultado = calcular($operador, $valor1, $valor2);
echo verificarTipoOperador($operador, $resultado, $valor1);