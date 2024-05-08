<?php
function countBy($x, $n)
{
//    $z = [];
//    for ($i = $x; $i <= $x * ($n + 1); $i += $x) {
//        $z[] = $i;
//    }
//    return $z;

    return range($x, $n * $x, $x);
}