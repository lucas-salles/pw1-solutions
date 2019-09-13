<?php

function minimum($array)  {
  $min = $array[0];
  foreach($array as $number) {
    if ($number < $min) {
      $min = $number;
    }
  }
  return $min;
}

function maximum($array)  {
  $max = $array[0];
  foreach($array as $number) {
    if ($number > $max) {
      $max = $number;
    }
  }
  return $max;
}

function rangeValues($length, $last=0, $step=0) {
  $result = [];
  if ($last != 0 && $step == 0) {
    for($flag = $length; $flag < $last; $flag++) {
      $result[] = $flag;
    }
  } elseif ($last != 0 && $step != 0) {
    for($flag = $length; $flag < $last; $flag+=$step) {
      $result[] = $flag;
    }
  } else {
    for($flag = 0; $flag < $length; $flag++) {
      $result[] = $flag;
    }
  }
  return $result;
}

function zip(...$arrays) {
  $matriz = [];
  for($i = 0; $i < sizeof($arrays); $i++) {
    $linha = [];
    for($j = 0; $j < sizeof($arrays); $j++) {
      $linha[] = $arrays[$j][$i];
    }
    $matriz[] = $linha;
  }
  return $matriz;
}

function uniq($array) {
  $result = [];
  foreach($array as $number) {
    if (!in_array($number, $result)) {
      $result[] = $number;
    }
  }
  return $result;
}

function sortNum($array) {
  $aux;
  for($i = 0; $i < sizeof($array); $i++) {
    for($j = $i + 1; $j < sizeof($array); $j++) {
      if ($array[$j] < $array[$i]) {
        $aux = $array[$j];
        $array[$j] = $array[$i];
        $array[$i] = $aux;
      }
    }
  }
  return $array;
} 