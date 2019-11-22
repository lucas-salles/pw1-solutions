<?php
// A = πr²

$pi = 3.14159265359;

function areaOfCircle($radius){
    global $pi;
    $area = $pi* $radius**2;
    return $area;
}


 