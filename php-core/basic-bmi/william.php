<?php
$weight = 82.0;
$height = 1.75;
$BMI = $weight / $height**2;
$result = '';

if ($BMI > 18.5):
 $result = "Underweight";
 elseif ($BMI <=  24.9):
 $result = "Normal weight";
 elseif ($BMI <= 29.9):
 $result = "Overweight";
 else:
 $result = "Obesity";
endif;

print ("BMI: " . $BMI . "\nResult: " .$result . "\n");

?>