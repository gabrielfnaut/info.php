<?php

// Calcular os números primos 


    $numero = 11; //numero que sera verificado 
    echo "Analisando o numero: $numero <br>";  //mensagem que aparece + variavel $numero
    $contprimos = 0; // acumulador
    echo"Valores mútiplos: "; // Numeros que sao multiplos do numero verificado 
   
    //Definindo laço para repetir pela quantia informada
    $a=0;
    for ($i=1; $i<=$numero; $i++) {    // loops (for)
 
      $resto = $numero % 2;  //  % Atribuicao com modulo
    
      if ($resto == 0) {    
        break;   // corte de execucao do codigo 
      }
      
      $resto = $numero % $i;   //  % Atribuicao com modulo 
    
      if ($resto != 0) {    // ( != Diferente de )
        $a++;
        echo "$i ";  // Variavel ($i)
      }
    }

    if ($a >= 1) { 
      echo"<br>Total de múltiplos: $a<br>";
      echo"Resultado: $numero É primo!";
    }else{ 
      echo"<br>Total de múltiplos: $a<br>";
      echo"Resultado: $numero Não é primo!";
    }







    

  