<?php

class Pessoa{
    private $cpf;
    use Nomeado;

    public function __construct(string $cpf,string $nome){
        $this->cpf = $cpf;
        $this->nome = $nome;
    }

    public function getCpf():string{
        return $this->cpf;
    }

    public function setCpf(string $cpf){
        $this->cpf = $cpf;
    }
}
?>
