<?php

$weigth = 60.0;
$height = 1.65;
$bmi = $weigth/($height**2);
$result;

if($bmi < 18.5){
    $result = 'UnderWeight';
}else if($bmi > 18.5 && $bmi < 24.9){
    $result = 'Normal Weigth';
}else if($bmi > 25 && $bmi < 29.9){
    $result = 'Overweight';
}else if ($bmi > 30):
    $result = 'Obesity';
endif;

print($result."\n");


//usando switch


switch ($bmi){
    case $bmi < 18.5:
        $result = 'UnderWeight';
        break;
    case $bmi > 18.5 && $bmi < 24.9:
        $result = 'Normal Weigth';
        break;
    case $bmi > 25 && $bmi < 29.9:
        $result = 'Overweight';
        break;
    case $bmi > 30:
        $result = 'Obesity';
        break;
}
print($result."\n");
?>