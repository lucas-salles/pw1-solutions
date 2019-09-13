<?php

function fibonacci($number) {
  $a = 0;
  $b = 1;
  $array = [];
  $aux;
  if ($number > 1) {
    $array[] = $a;
    $array[] = $b;
    while ($number > 2) {
      $aux = $a + $b;
      $a = $b;
      $b = $aux;
      $number--;
      $array[] = $aux;
    }
  } elseif ($number == 1) {
    $array[] = 0;
    return $array;
  }
  return $array;
}
