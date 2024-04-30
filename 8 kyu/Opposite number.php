<?php
function opposite($n)
{
    ## 1 method
//    if ($n < 0) {
//        return abs($n);
//    } else {
//        return -$n;
//    }

    ## 2 method
//    return $n < 0 ? abs($n) : -$n;

    ## 3 method
    return -$n;
}

echo opposite(-5);