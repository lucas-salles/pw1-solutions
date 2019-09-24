<?php

function withdraw($number)
{
  $result = [];
  $notas = [100, 50, 20, 10, 5, 2];
  foreach($notas as $valor){
    $quant = (int) ($number / $valor);
    if($quant != 0){
      array_push($result, [$valor, $quant]);
      $number -= ($quant * $valor);
    }
  }
  return $result;
}
