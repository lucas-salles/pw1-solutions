<?php

class Company {
    private $name;
    private $founded;
    private $industry;
    private $kind;

    public function __construct(string $name, int $founded, string $industry, string $kind) {
        $this->name = $name;
        $this->founded = $founded;
        $this->industry = $industry;
        $this->kind = $kind;
    }

    public function getName():string {
        return $this->name;
    }

    public function setName(string $name) {
        $this->name = $name;
    }

    public function getFounded():int {
        return $this->founded;
    }

    public function setFounded(string $founded) {
        $this->founded = $founded;
    }

    public function getIndustry():string {
        return $this->industry;
    }

    public function setIndustry(string $industry) {
        $this->industry = $industry;
    }

    public function getKind():string {
        return $this->kind;
    }

    public function setKind(string $kind) {
        $this->kind = $kind;
    }

    public function __toString() {
        return str_pad($this->name, 15, '.') . $this->founded;
    }
}