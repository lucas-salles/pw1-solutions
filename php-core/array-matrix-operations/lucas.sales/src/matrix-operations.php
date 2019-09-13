<?php

function addingMatrix($a, $b) {
  $result = [];
  for($i = 0; $i < sizeof($a); $i++) {
    $linha = [];
    for($j = 0; $j < sizeof($b); $j++) {
      $linha[] = $a[$i][$j] + $b[$i][$j];
    }
    $result[] = $linha;
  }
  return $result;
}

function multiplyingMatrix($a, $b) {
  $result = [];
  for($i = 0; $i < sizeof($a); $i++) {
    $aux = [];
    for($j = 0; $j < sizeof($a); $j++) {
      $soma = 0;
      for($k = 0; $k < sizeof($b); $k++) {
        $soma += $a[$i][$k] * $b[$k][$j];
      }
      $aux[] = $soma;
    }
    $result[] = $aux;
  }
  return $result;
}
