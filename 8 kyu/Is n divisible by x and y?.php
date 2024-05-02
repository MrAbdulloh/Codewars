<?php
function is_divisible($n, $x, $y)
{
    return ($n % $x == 0) and ($n % $y == 0);
}

echo is_divisible(3,3,4);