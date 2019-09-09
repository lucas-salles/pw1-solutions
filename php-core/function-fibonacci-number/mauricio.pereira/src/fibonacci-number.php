<?php

function fibonacci($number)
{
  $result=null;
  $a = 0;
  $b = 1;
  $c;
  if ($number >= 1){
    $result = $a;
  }
  if ($number >= 2) {
    $result = $b;
  }
  for($i = 2; $i < $number; $i++){
    $c = $a + $b;
    $a = $b;
    $b = $c;
    $result = $b;
  }
  return $result;
}
