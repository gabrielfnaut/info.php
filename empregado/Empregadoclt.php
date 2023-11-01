<?php


interface Remuneravel {
    public function remuneracao();
}

class Empregadoclt implements  Remuneravel{
    public  $salario = 2000 ;
    public function remuneracao() {
        $this->salario *= 2;
    }
    
}

class FolhaDePagamento {
    public Remuneravel $salario ;

    public function pagar(Remuneravel $salario){ 
        $this->salario= $salario;
        $this->salario->remuneracao();
      
    }
    public function __toString() {
        return "O salário é :{$this->salario->salario}<br>";
    }
}

$clt = new Empregadoclt();

$folha = new FolhaDePagamento();
$folha->pagar($clt);
echo "{$folha}";