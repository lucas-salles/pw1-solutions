<?php

function fibonacci($number)
{
  $result = '';
  $a = 1;
  $b = 1;
  for ($i=1; $i <= $number; $i++) { 
    switch($i)
    {
        case 1:
            $result .= '0';
            break;
        case 2:
        case 3:
            $result .= ', 1';
            break;
        default:
          $a += $b;
          $c = $a;
          $a = $b;
          $b = $c;
          $result .= ", $b";    
    }
  }
  return $result;
}
