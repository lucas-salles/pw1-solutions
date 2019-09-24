<?php

require __DIR__ . '/../../../function-prime/mauricio.pereira/src/prime.php';

function primeFactors($number)
{
  $result = [];
  if($number !== 1){
    for($n = 2; $n <= $number; $n++){
      while($number % $n === 0){
        array_push($result, $n);
        $number /= $n;
      }
      if($number == $n){
        array_push($result, $n);
        break;
      }
    }
  }
  return $result;
}
