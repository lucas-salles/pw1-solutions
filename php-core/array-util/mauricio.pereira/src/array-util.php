<?php

function minimum($array) 
{
  $min = array_shift($array);
  foreach($array as $n){
    if($n < $min){
      $min = $n;
    }
  }
  return $min;
}

function maximum($array) 
{
  $max = array_shift($array);
  foreach($array as $n){
    if($n > $max){
      $max = $n;
    }
  }
  return $max;
}

function rangeValues($length, $last=0, $step=0)
{
  $result = [];
  if($last === 0){
    foreach(range(0,$length-1) as $i){
      array_push($result,$i);
    }
  } else if ($last !== 0 && $step === 0){
    foreach(range($length,$last-1) as $j){
      array_push($result,$j);
    }
  } else {
    for($k = $length; $k < $last; $k += $step){
      array_push($result,$k);
    }
  }
  return $result;
}

function zip(...$arrays) 
{
  $result = [];
  foreach(range(0, sizeof($arrays) - 1) as $n){
    $result[$n] = [];
  }
  foreach($arrays as $array){
    foreach($array as $key=>$valor){
      array_push($result[$key], $valor);
    }
  }
  return $result;
}

function uniq($array) 
{
  $result = [];
  $soma = 0;
  foreach($array as $valor) {
    $soma = 0;
    if ($result == []) {
      array_push($result, $valor);
    } else {
      foreach ($result as $valor2) {
        if ($valor == $valor2) {
          $soma++;
        }
      }
      if ($soma == 0) {
        array_push($result, $valor);
      }
    }
  }
  return $result;
}

function sortNum($array) 
{
  for($i = 0; $i < sizeof($array); $i++){
    for($j = 0; $j < sizeof($array); $j++){
      if(($array[$i] <=> $array[$j]) == -1){
        $aux = $array[$i];
        $array[$i] = $array[$j];
        $array[$j] = $aux;
      }
    }
  }
  return $array;
} 