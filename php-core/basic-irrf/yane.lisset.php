<?php

const sal = 3500;
$tax;

if (sal<=1903.98) {
    $tax=0;
}
elseif (sal<=2826.65){
    $tax=sal*(7.5/100)-142.80;
}
elseif (sal<=3751.05){ 
    $tax=sal*(15/100)-354.80;
}
elseif (sal<=4664.68){
    $tax=sal*(22.5/100)-636.13;
}
else {
    $tax=sal*(27.5/100)-869.36;
}
echo "IRRF:${tax}\n";
// IRRF: 170.2