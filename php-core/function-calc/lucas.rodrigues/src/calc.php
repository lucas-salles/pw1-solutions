<?php

/**
 * $operator: '+', '-', '*', '/'
 */
function calc($operand1, $operand2, $operator)
{
  switch ($operator) {
    case '+':
      return $operand1+$operand2;
      break;
    case '-':
      return $operand1-$operand2;
      break;
    case '*':
      return $operand1*$operand2;
      break;
    case '/':
      return $operand1/$operand2;
      break;
  }
}

function calcWithEval($operand1, $operand2, $operator)
{
  // TODO 
  // Tips echo eval('return 1+1;');
}
 