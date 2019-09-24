<?php
 require __DIR__ . '/../../../function-prime/mauricio.pereira/src/prime.php';

/**
 * begin: 1..n
 * end: 1..n, end > begin
 */
function primes($begin, $end = 0)
{
  $result = [];
  if ($end == 0) {
    for($i=2; sizeof($result) < $begin; $i++){
      if(isPrime($i)){
        array_push($result, $i);
      }
    }
  } else if ($end > $begin) {
    for($i=2; $i < $end; $i++){
      if(isPrime($i)){
        array_push($result, $i);
      }
    }
  }
  return $result;
}
