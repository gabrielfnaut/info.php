<?php


interface Remuneravel {
    public function remuneracao();
}

class Estagiario implements Remuneravel {
    public  $salario = 600 ;
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

$estagiario = new Estagiario();

$folha = new FolhaDePagamento();
$folha->pagar($estagiario);
echo "{$folha}";
