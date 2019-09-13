<?php

function total($products) {
  return array_reduce($products, function($price, $product) {
    $price += $product[1];
    return $price;
  });
}
