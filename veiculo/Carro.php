<?php


interface IVeiculo {
    public function dirigir($chave);
}

class Veiculo {
    public IVeiculo $veiculo;

    public function locomover(IVeiculo $veiculo) {
        $this->veiculo = $veiculo;
    }

    public function __toString() {
        echo $this->veiculo;
    }
}


class Carro implements IVeiculo {
    public $chave = "chave_presencial";
    public $airbag = "motorista_carona";

    public function dirigir($chave) {
        $this->chave = $chave;
        echo "estou andando... {$this->chave}<br>";
    }
    
    public function setAirBag($airbag) {
        $this->airbag = $airbag;
        echo "o airbag é... {$this->airbag}<br>";
    }
    
}

$chave = "xyz";

$carro = new Carro();
$carro->dirigir($cahve);
$carro-setAirBag("airbag_lateral");

$veiculo = new Veiculo();
echo $veiculo->locomover($carro);

