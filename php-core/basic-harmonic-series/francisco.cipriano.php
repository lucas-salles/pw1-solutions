<?php

const size = 10;

function harmonicSeries($num) {
    if ($num != 0) {
        return harmonicSeries($num-1) + 1/$num;
    }
    return 0;
}

print(harmonicSeries(10));
// TODO h(10)
// Output: h(10): 2.9289682539683

?>