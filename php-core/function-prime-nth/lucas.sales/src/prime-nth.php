<?php

function isPrime($number) {
  $cont = 0;
  $result;
  if ($number == 0 || $number == 1) {
    return false;
  } else {
    for($i = 1; $i <= $number; $i++) {
      if ($number % $i == 0) {
        $cont++;
      }
    }
    if ($cont > 2) {
      return false;
    } else {
      return true;
    }
  }
}

function nthPrime($nth) {
  $result;
  $i = 0;
  $cont = 0;
  while(true) {
    if (isPrime($i) == true) {
      $result = $i;
      $cont++;
    }
    if ($cont == $nth) {
      break;
    }
    $i++;
  }
  return $result;
}
