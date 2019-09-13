<?php

function primeFactors($number) {
  $result = [];
  for($i = 2; $i <= $number; $i++) {
    while (($number % $i) == 0) {
      $result[] = $i;
      $number /= $i;
    }
  }
  return $result;
}
