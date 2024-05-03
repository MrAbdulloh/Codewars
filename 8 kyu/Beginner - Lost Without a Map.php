<?php
function maps($x)
{
    $ans = [];
    foreach ($x as $item) {
        $ans[] = $item * 2;

    }
    return $ans;
}

print_r(maps([4, 1, 1, 1, 4]));