<?php

class Order {
    private $products = [];

    public function addProduct(Product $product) {
        $this->products[] = $product;
    }

    public function total():int {
        return array_reduce($this->products, function($total, $product) {
            $total += $product->getPrice();
            return $total;
        });
    }
}