<?php
function reverseSeq($n)
{
    $result = [];
    for ($i = 1; $i <= $n; $i++) {
        array_push($result, $i);
    }
    return array_reverse($result);
}


$n = 5;
print_r(reverseSeq($n));