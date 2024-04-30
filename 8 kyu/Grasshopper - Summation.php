<?php
function summation($n)
{
    ## 1 method
//    $ans = 0;
//
//    for ($i = 1; $i <= $n; $i++) {
//        $ans +=$i;
//    }
//    return $ans;

    ## 2 method
    return array_sum(range(1, $n));
}

echo summation(8);