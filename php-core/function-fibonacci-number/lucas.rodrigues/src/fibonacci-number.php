<?php

function fibonacci($number)
{
  switch($number)
  {
    case 0:
      return null;
      break;
    case 1:
      return 0;
      break;
    case 2:
    case 3:
      return 1;
      break;
    default:
      return fibonacci($number-1)+fibonacci($number-2);
  }
}
