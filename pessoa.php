<?php

/*
Criar um objeto (classe) pessoa,
que contemple os dois tipos de pessoa (juridico e fisico) CNPJ e CPF 
separando as suas caracteristicas/individualidades conforme o tipo 
Ex: Pessoa fisica(CPF) validar o CPF
pessoa juridica (CNPJ) validar o CNPJ 
*/

class Pessoa {
    public $nome;
    public $idade;
    public $nomeMae;
    public $nomePai;
    public $telefone;
    public $cpf;

    public function validarcpf($cpf) {
        $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
     
        // Verifica se foi informado todos os digitos corretamente
        if (strlen($cpf) != 11) {
            return false;
        }
    
        // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }
    
        // Faz o calculo para validar o CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                return false;
            }
        }
        return true;
    }
}



class Empresa {
    public $nome;
    public $fundacao;
    public $socios;
    public $cnpj;

}