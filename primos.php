<?php

// Calcular os números primos 


    $numero = 709; 
    echo "Analisando o numero: $numero <br>";
    $contprimos = 0; // acumulador
    echo"Valores mútiplos: ";
   
    //Definindo laço para repetir pela quantia informada
    $a=0;
    for ($i=1; $i<=$numero; $i++) {
 
      $resto = $numero % 2;
    
      if ($resto == 0) { 
        break;
      }
      
      $resto = $numero % $i;
    
      if ($resto != 0) { 
        $a++;
        echo "$i ";
      }
    }

    if ($a >= 1) { 
      echo"<br>Total de múltiplos: $a<br>";
      echo"Resultado: $numero É primo!";
    }else{ 
      echo"<br>Total de múltiplos: $a<br>";
      echo"Resultado: $numero Não é primo!";
    }






    

  