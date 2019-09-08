<?php

function fibonacci($number) {
  $a = 0;
  $b = 1;
  $c;
  $result = $a . ', ' . $b;
  $cont = 3;
  if ($number > 1) {
    while ($cont <= $number) {
      $c = $a + $b;
      $result .= ', ' . $c;
      $a = $b;
      $b = $c;
      $cont++;
    }
  } elseif ($number == 1) {
    return '0';
  } else {
    return '';
  }
  return $result;
}
