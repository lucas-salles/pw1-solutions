<?php

function fibonacci($number) {
    if ($number == 1) {
        return 0;
    } elseif ($number == 2) {
        return 1;
    } elseif ($number > 2) {
        return fibonacci($number - 1) + fibonacci($number - 2);
    }
}
