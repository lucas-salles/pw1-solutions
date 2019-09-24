<?php

function halfSquare($size)
{
  
}

function triangleText($size)
{
  $result="";
  for ($i = 1; $i <= $size; $i++){
    for ($j = 1; $j <= $size; $j++){
      if($i >= $j){
        $result .= "#";
      } else {
        $result .= " ";
      }
    }
    if($i < $size){
      $result .= "\n";
    }
  }
  return $result;
}

function halfDiamondText($size)
{
  $result="";
  $interacoes = (2 * $size) - 1;
  $cont = 1;
  $quant = $cont;
  while($cont <= $interacoes){
    if($cont <= $size ? $quant = $cont : $quant--);
    for ($i = 1; $i <= $size; $i++){
      if($i <= $quant){
        $result .= "#";
      } else {
        $result .= " ";
      }
    }
    if($cont < $interacoes){
      $result.="\n";
    }
    $cont++;
  }
  return $result;
}

function diamondText($size)
{
  $result="";
  $interacoes = (2 * $size) - 1;
  $cont = 1;
  $quant = 1;
  while($cont <= $interacoes){
    if($cont <= $size ? $quant = $cont * 2 - 1 : $quant -= 2);

    for ($a = 0; $a < ($interacoes - $quant) / 2; $a++){
      $result .= " ";
    }
    for ($i = 0; $i < $quant; $i++){
      $result .= "#";
    }
    for ($b = 0; $b < ($interacoes - $quant) / 2; $b++){
      $result .= " ";
    }

    if($cont < $interacoes){
      $result.="\n";
    }
    $cont++;
  }
  return $result;
}

function boardText($size)
{
  $result="";
  for($i = 1; $i <= $size; $i++){
    for($j = 1; $j <= $size; $j++){
      if(($i + $j) % 2 == 0){
        $result .= "#";
      } else {
        $result .= " ";
      }
    }
    if($i < $size){
      $result .= "\n";
    }
  }
  return $result;
}
