<?php
function paperwork(int $n, int $m): int
{
    if ($m < 0) {
        return 0;
    } else if ($n < 0) {
        return 0;
    } else {
        return $n * $m;
    }
}