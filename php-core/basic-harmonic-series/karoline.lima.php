<?php

const size = 10;
$h=0;

for ($n=1; $n<=size; $n+=1) {
    $h += 1/ $n;
}

echo "h(10) : ${h}";