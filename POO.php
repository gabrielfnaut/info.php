<?php
// OOP || POO
//private, public e protected


class Pessoa {
    public $nome;
    protected $cpf;
    public $altura; 
    public $peso;
    public $pernas;
    public $bracos;
    public $cabeca;
    public $rosto;
    public $olhos;
    public $boca;

    
    public function falar($boca) {
        echo "A pessoa esta falando. <br>";
    }

    public function piscar($olhos) {
        echo "A pessoa esta piscando. <br>";
    }

    public function andar($pernas) {
        echo "A pessoa esta andando. <br>";
    }

    public function __construct($nome, $cpf, $altura, $peso, $pernas, $bracos, $cabeca, $rosto, $olhos, $boca,){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->altura = $altura;
        $this->peso = $peso;
        $this->pernas = $pernas;
        $this->bracos = $bracos;
        $this->cabeca = $cabeca;
        $this->rosto = $rosto;
        $this->olhos = $olhos;
        $this->boca = $boca;

    }


    public function __soTring() {
        return $this;
    }
}

$nome = "gab";

$pessoa = new Pessoa($nome, $cpf, $altura, $peso, $pernas, $bracos, $cabeca, $rosto, $olhos, $boca,);
$pessoa->andar("pernas");
$pessoa->falar("boca");
$pessoa->piscar("olhos");
echo $pessoa; 
