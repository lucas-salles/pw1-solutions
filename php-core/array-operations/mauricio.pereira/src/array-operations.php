<?php

function sum($array)
{
  $result = 0;
  foreach($array as $valor){
    $result += $valor;
  }
  return $result;
}

function product($array)
{
  $result = 1;
  foreach($array as $valor){
    $result *= $valor;
  }
  return $result;
}

function sumOdds($array)
{
  $result = 0;
  foreach($array as $valor){
    if($valor % 2 != 0){
      $result += $valor;
    }
  }
  return $result;
}
