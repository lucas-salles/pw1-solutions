<?php

function gtZero($products)
{
  for($i = sizeof($products) -1; $i >= 0; $i--){
    if($products[$i][2] == 0){
      unset($products[$i]);
    }
  }
  return $products;
}

function subTotal($products)
{
  $result = [];
  foreach($products as $item){
    $aux = [$item[0], $item[1] * $item[2]];
    array_push($result, $aux);
  }
  return $result;
}

function total($products)
{
  $result = 0;
  $sub = subTotal($products);
  foreach($sub as $item){
    $result += $item[1];
  }
  return $result;
}
