<?php
function solution($number)
{
    if ($number < 0) {
        return 0;
    }
    $ans = [];
    for ($i = 1; $i < $number; $i++) {
        if ($i % 3 == 0 or $i % 5 == 0) {
            array_push($ans, $i);
        }
    }
    return array_sum($ans);
}

echo solution(10);