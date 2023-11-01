<?php

/*
*implementar  a classe estagiario
*implementar  a classe empregadoCLT
*implementar  a classe terceirizado
*implementar  a classe folha de pagamento
*/

/*
 * Implementar a classe estagiario
 * Implementar a classe empregadoCLT
 * Implementar a classe tercerizado 
 * Implementar a classe Folha de Pagamento
 */
interface Remuneravel {
    public function remuneracao();
}

class Estagiario implements Remuneravel {
    public  $salario = 600 ;
    public function remuneracao() {
        $this->salario *= 2;
    }

    
}

class Empregadoclt implements  Remuneravel{
    public  $salario = 2000 ;
    public function remuneracao() {
        $this->salario *= 2;
    }
    
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

$estagiario = new Estagiario();

$folha = new FolhaDePagamento();
$folha->pagar($estagiario);
echo "{$folha}";