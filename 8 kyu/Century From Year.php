<?php
//https://www.codewars.com/kata/5a3fe3dde1ce0e8ed6000097/train/php
function centuryFromYear($year): int
{
    if ($year % 100 == 0) {
        return $year / 100;
    } else {
        return intval($year / 100) + 1;
    }
}

echo centuryFromYear(2020);