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


class Moto implements IVeiculo {
    public $chave = "chave_normal";

    public function dirigir($chave) {
        $this->chave = $chave;
        echo "estou andando... {$this->chave}<br>";
    }
}

$chave = "xyz";

$moto = new Moto();
$moto->dirigir($cahve);

$veiculo = new Veiculo();
echo $veiculo->locomover($moto);