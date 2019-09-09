<?php

$weight = 60.0;
$height = 1.65;

$bmi=$weight/($height*$height);
if ($bmi<18.5){
    echo "BMI: $bmi \n Result:Underweight" ;
}
elseif ($bmi<=24.9){
    echo "BMI: $bmi \nResult:Normal weight" ;
}
elseif ($bmi<=29.9){
    echo "BMI: $bmi \nResult:Overweight" ;
}
else {
    echo "BMI: $bmi \nResult:Obesity";
}