<?php 

function ehPrimo($number)
{
  $result;
  $more_div = 0;
  for($i = $number; $i > 1; $i--){
    if($number % $i == 0){
      $more_div += 1;
    }
  }
  if ($more_div == 1){
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function nthPrime($nth)
{
  $prime = 0;
  $cont = 2;
  $result;
  while($prime < $nth){
    if(ehPrimo($cont)){
      $prime += 1;
      $result = $cont;
    }
    $cont++;
  }
  return $result;
}