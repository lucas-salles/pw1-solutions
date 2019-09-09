<?php

function isPrime($number)
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
