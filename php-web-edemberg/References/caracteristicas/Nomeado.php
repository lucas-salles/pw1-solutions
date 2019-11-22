<?php

trait Nomeado{
    private $nome;

    public function getNome():string{
        return $this->nome;
    }

    public function setNome(string $nome){
        $this->nome = $nome;
    }
}