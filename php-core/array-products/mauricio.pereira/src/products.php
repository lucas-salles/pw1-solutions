<?php

function total($products)
{
  $result = 0;
  foreach($products as $item){
    $result += $item[1];
  }
  return $result;
}
