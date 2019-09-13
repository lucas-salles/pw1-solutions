<?php

function nthPrime($nth)
{
  $number = 0;
  for ($i=0, $j=0; $i < $nth; $i++) { 
    
    for($j++; !isPrime($j); $j++){}
    $number = $j;
  }
  
  return $number;
}

function isPrime($number)
{
  if($number <= 1) return false;
  for ($i=2; $i < $number; $i++) { 
    if ($number % $i ==0)
      return false;
  }
  return true;
}
?>