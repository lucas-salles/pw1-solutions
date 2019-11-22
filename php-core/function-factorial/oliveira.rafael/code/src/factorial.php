<?php

function factorial($number)
{
  $num = $number;

  $v = array_product(range($num, 1));
  print_r($v);
}

factorial(7);