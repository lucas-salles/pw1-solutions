<?php
const size = 10;
// TODO h(10)
$result = 0;

for ($i=1; $i <= size; $i++) { 
    $result += 1/$i;
}

echo "h(".size."): $result";

// h = 1/1 + 1/2 + ... + 1/n
// Output: h(10): 2.9289682539683

?>