<?php

$weight = 60.0;
$height = 1.65;
$result;
$result = $weight/$height;

if ($result < 18.5) {
    print("Underweight");
} elseif ($result < 25) {
    print("Normal weight");
} elseif ($result < 30) {
    print("Overweight");
} else {
    print("Obesity");
}

?>