<?php

/**
 * $operator: '+', '-', '*', '/'
 */
function calc($operand1, $operand2, $operator)
{
  $result;
  switch($operator){
    case 'add':
    case '+':
      $result = $operand1 + $operand2;
      break;
    case '-':
      $result =  $operand1 - $operand2;
      break;
    case '/':
      $result =  $operand1 / $operand2;
      break;
    case '*':
      $result =  $operand1 * $operand2;
      break;
    default:
      $result =  0;
  }
  return $result;
}

function calcWithEval($operand1, $operand2, $operator)
{
  // TODO 
  // Tips echo eval('return 1+1;');
}