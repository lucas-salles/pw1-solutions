<?php

class Order
{
  private $products = [];

  public function addProduct(Product $product) {
      $this->products[] = $product;
  }

  public function total() {
    $aux=0;
    foreach($this->products as $prod){
      $aux += $prod->getPrice();
    }
    return (int) $aux;
  }
}
