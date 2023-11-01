<?php
// OOP || POO
// funcoes ||  metodos
//  objeto||classe
//  propriedades || atributos
class Carro {
    const NRO_CHASSI = 'a4s5d65asd4564das65asd';
    private $marca;
    protected $modelo;
    public $ano;

    private function ligar($chave, $cartao) {
        if(true){}
        if(true){}
    }

    protected function trocarMarcha() {
    }

    private function arrumarMotor() {
        $this->ligar(); // 
        self::NRO_CHASSI; // 'a4s5d65asd4564das65asd'
    }
}

// $carro = new Carro();
//  $carro->ligar($chave, $cartao);


