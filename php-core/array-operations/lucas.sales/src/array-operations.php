<?php

function sum($array) {
  $result = 0;
  foreach($array as $number) {
    $result += $number;
  }
  return $result;
}

function product($array) {
  $result = 1;
  foreach($array as $number) {
    $result *= $number;
  }
  return $result;
}

function sumOdds($array) {
  $result = 0;
  foreach($array as $number) {
    if ($number % 2 != 0) {
      $result += $number;
    }
  }
  return $result;
}
