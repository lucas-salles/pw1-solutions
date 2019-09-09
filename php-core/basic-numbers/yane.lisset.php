<?php

//numbers-for
for ($i = 0; $i < 100; $i++) {
    $perc= $i."  ";
    if  ($i%10==0){
        echo"\n";
    }
    if ($i<10) {
        $perc="0".$i."  ";
    }
echo "$perc";
}
  //numbers-reverse-for
  for( $i=99; $i>=0; $i-=1 ){
    $perc= $i."  ";
    if  ($i%10==9){
        echo"\n";
    }
    if ($i<10) {
        $perc="0".$i."  ";
    }
    echo "$perc";
  }
//numbers-reverse-odd-for
  for( $i=99; $i>=0; $i-=2 ){
    $perc= $i."  ";
    if  ($i%10==9){
        echo" \n";
    }
    if ($i<10) {
        $perc="0".$i."  ";
    }
    echo "$perc";
  }

