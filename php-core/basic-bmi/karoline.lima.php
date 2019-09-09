<?php

$weight = 60.0;
$height = 1.65;
$result;

$bmi = $weight / $height**2;


//BMI-Utilizando IF

if($bmi<18.5) {
    $result = 'Underweight';
} elseif($bmi<=24.9){
    $result = 'Normal weight';
} elseif($bmi<=29.9){
    $result = 'Overweight';
} else {
    $result = 'Obesity';
}


echo "BMI:${bmi}\n Result:${result}\n";



//BMI-Utilizando Switch

switch($bmi){

    case ($bmi<18.5);
        echo "BMI:${bmi}\nResult:Underweight\n";
        break;
    case ($bmi >= 18.5 && $bmi <= 24.9);
        $result = 'Normal weight';
        echo "BMI:${bmi}\nResult:Normal weight\n";
        break;
    case ($bmi >= 25  && $bmi <= 29.9);
        echo "BMI:${bmi}\nResult:Overweight\n";
        break;
    case ($bmi>30);
        echo "BMI:${bmi}\nResult:Obesity\n";
        break;


