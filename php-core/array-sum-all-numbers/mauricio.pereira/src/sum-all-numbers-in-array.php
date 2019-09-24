<?php

function sumIntegerInArray($array)
{
  $result = 0;
  foreach ($array as $number){
    if(is_array($number)){
      if(!empty($number)){
        $result += sumIntegerInArray($number);
      }
    } else {
      $result += $number;
    }
  }
  return $result;
}