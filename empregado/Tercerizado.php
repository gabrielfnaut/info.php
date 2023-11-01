<?php


interface Remuneravel {
    public function remuneracao();
}

class Tercerizado  implements  Remuneravel{
    public  $salario = 5000 ;
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

$tercerizado = new Tercerizado();

$folha = new FolhaDePagamento();
$folha->pagar($tercerizado);
echo "{$folha}";