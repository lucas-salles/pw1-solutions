<?php

function toRoman($number)
{
  $quant=0;
  $romanos = [1000 => "M",500 => "D",100 => "C",50 => "L",10 => "X",5 => "V",1 => "I"];
  $errado = ["DCCCC","LXXXX","VIIII","CCCC","XXXX","IIII"];
  $correto = ["CM","XC","IX","CD","XL","IV"];
  $result="";
  foreach($romanos as $key=>$name){
    $quant = (int) ($number / $key);
    for($i=0;$i<$quant;$i++){
      $result .= $name;
    }
    $number -= $quant * $key;
  }
  $result = str_replace($errado, $correto, $result);
  return $result;
}
