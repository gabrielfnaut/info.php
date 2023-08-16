<?php

//Meses 

$mes = [ "Janeiro", "Fevereiro",
"Março", "Abril", "Maio",
"Junho", "julho", "Agosto",
"Setembro", "Outubro",
"Novembro", "Dezembro"];

$nummes = 11;

if ($nummes >=1 && $nummes <=12) {
    echo $mes [$nummes - 1];
} else {
    echo "Mês inválido ";
}

