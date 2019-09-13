<?php

function gtZero($products) {
  return array_filter($products, function($product) {
    return $product[2] > 0;
  });
}

function subTotal($products) {
  return array_map(function($product) {
    $product = [$product[0], $product[1] * $product[2]];
    return $product;
  }, $products);
}

function total($products) {
  $arrayMap = array_map(function($product) {
    $product = $product[1] * $product[2];
    return $product;
  }, $products);
  
  return array_reduce($arrayMap, function($price, $product) {
    $price += $product;
    return $price;
  });
}
