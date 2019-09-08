<?php

function factorial($number) {
  $fat = 1;
  for($i = 1; $i <= $number; $i++) {
    $fat *= $i;
  }
  return $fat;
}
