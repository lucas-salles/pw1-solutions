<?php

//numbers-for:
for ($i=0; $i < 100; $i++) { 
    echo sprintf("%'02d ",$i);
    if(($i+1) % 10 == 0)
        echo "\n";
}

echo "\n\n";

//numbers-forfor:
for ($i=0; $i < 10; $i++) { 
    for ($j=0; $j < 10; $j++) 
        echo "$i$j ";
    echo "\n";
}

echo "\n\n";

//numbers-reverse-for:
for ($i=99; $i > -1; $i--) { 
    echo sprintf("%'02d ",$i);
    if($i % 10 == 0)
        echo "\n";
}

echo "\n\n";

//numbers-reverse-odd-for:
for ($i=99; $i > -1; $i--) { 
    if($i % 2 != 0)
        echo sprintf("%'02d ",$i);
    if($i % 10 == 0)
        echo "\n";
}