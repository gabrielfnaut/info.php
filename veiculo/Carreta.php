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

class Carreta implements IVeiculo {
    public $chave = "chave_canivete";

    public function dirigir($chave) {
        $this->chave = $chave;
        $oleo = $this->verificarOleoMotor();
        echo "estou andando... {$this->chave}<br>" . $oleo;
    }

    public function verificarOleoMotor() {
        return "Oleo esta OK!<br>";
    }

}

$chave = "xyz";

$carreta = new Carreta();
$carreta->dirigir("abc");

$veiculo = new Veiculo();
echo $veiculo->locomover($carreta);