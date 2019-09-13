<?php

$weight = 60.0;
$height = 1.65;
$result;

$bmi = $weight / ($height ** 2);

if($bmi < 18.5)
{
    $result = "Underweight";
} elseif ($bmi < 25)
{
    $result = "Normal weight";
} else if ($bmi < 30)
{
    $result = "Overweight";
} else
{
    $result = "Obesity";
}

echo "BMI: $bmi\nResult: $result";

?>