<?php

function withdraw($number) {
  $result = [];
  $x = [100, 50, 20, 10, 5, 2, 1];
  foreach($x as $value) {
    $cont = intval($number / $value);
    if ($cont) {
      $result[] = [$value, $cont];
    }
    $number -= $cont * $value;
  }
  return $result;
}
