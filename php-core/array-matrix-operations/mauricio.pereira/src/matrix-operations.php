<?php

function addingMatrix($a, $b)
{
  $result = [];
  for($i = 0; $i < sizeof($a); $i++){
    for($j = 0; $j < sizeof($a); $j++){
      $result[$i][$j] = $a[$i][$j] + $b[$i][$j];
    }
  }
  return $result;
}

function multiplyingMatrix($a, $b)
{
  // $result = [];
  // for($i = 0; $i < sizeof($a); $i++){
  //   for($j = 0; $j < sizeof($a); $j++){
      
  //   }
  // }
  // return $result;
}
