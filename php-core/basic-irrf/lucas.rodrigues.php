<?php
const salary = 3000;

$tax;

if(salary < 1903.99){
    $tax = 0;
} 
elseif (salary < 2826.66) {
    $tax = salary * 0.075 - 142.80;
}
elseif (salary < 3751.06) {
    $tax = salary * 0.15 - 354.80;
}
elseif (salary < 4664.68) {
    $tax = salary * 0.225 - 636.13;
}
else {
    $tax = salary * 0.275 - 869.36;
}

echo "IRRF: $tax";

// Output: IRRF: 170.2

?>