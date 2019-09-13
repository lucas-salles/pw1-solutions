<?php
 // require __DIR__ . '/../../../function/prime/code/prime.php';

/**
 * begin: 1..n
 * end: 1..n, end > begin
 */
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


function primes($begin, $end = 0) {
  $array = [];
  if ($end == 0) {
    $end = $begin;
    $i = 0;
    $cont = 0;
    while(true) {
      if (isPrime($i) == true) {
        $array[] = $i;
        $cont++;
      }
      if ($cont == $end) {
        break;
      }
      $i++;
    }
  } else {
    for($i = $begin; $i <= $end; $i++) {
      if (isPrime($i) == true) {
        $array[] = $i;
      }
    }
  }
  return $array;
}
