<?php

trait Pelagem{
    private $pelo;
    private $corPelo;
    private $texturaPelo;

    #get e set pelo e texturaPelo;
    public function getCorPelo():string{
        return $this-> corPelo;
    }

    public function setCorPelo(string $corPelo){
        $this->corPelo = $corPelo;
    }
}
?>