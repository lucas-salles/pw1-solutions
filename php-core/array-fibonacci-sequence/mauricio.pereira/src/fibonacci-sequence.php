<?php

function fibonacci($number)
{
  $result = [];
  $a = 0;
  $b = 1;
  $c;
  if ($number >= 1){
    array_push($result, $a);
  }
  if ($number >= 2) {
    array_push($result, $b);
  }
  for($i = 2; $i < $number; $i++){
    $c = $a + $b;
    $a = $b;
    $b = $c;
    array_push($result, $b);
  }
  return $result;
}
