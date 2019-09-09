<?php

// Utilizando For

for($n=0; $n<=100; $n++){
    if($n<10){
        print("0");
    }
    print($n);
    if($n>0 && $n%10==9){
        print("\n");
    }else{
        print(" ");
    }
}

// Utilizando For For
for($n=0; $n<10; $n++){
    for($index=0; $index<10; $index++){
        if($index != 9){
            echo $n.$index." ";
        }else{
            echo $n.$index."\n";
        }
    }
}

//Reverse For
for ($n = 99; $n >= 0; $n--) {

    if ($n >= 0 && $n<=9) {
        print("0");
    }

    print($n." ");

    if ($n%10==0) {
        print("\n");
    }
}

//Reverse Odd For
for ($n = 99; $n >= 0; $n--) {
    if($n%2!=0){
        if ($n >= 0 && $n<=9) {
            print("0");
        }

        print($n." ");

        if ($n%10==1) {
            print("\n");
        }
    }
}