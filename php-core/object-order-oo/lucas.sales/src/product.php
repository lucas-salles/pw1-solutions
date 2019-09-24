<?php

class Product {
    private $id;
    private $name;
    private $price;

    public function __construct(string $id, string $name, float $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getId():int {
        return $this->id;
    }

    public function setId(int $id) {
        $this->id = $id;
    }

    public function getName():string {
        return $this->name;
    }

    public function setName(string $name) {
        $this->name = $name;
    }

    public function getPrice():float {
        return $this->price;
    }

    public function setPrice(float $price) {
        $this->price = $price;
    }

    public function __toString() {
        return "id: $this->id, name: $this->name, price: $this->price";
    }
}