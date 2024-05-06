<?php
function simpleMultiplication($number)
{
//    if ($number % 2 == 0) {
//        return $number * 8;
//    } else {
//        return $number * 9;
//    }

    $number % 2 == 0 ? $result = $number * 8 : $result = $number * 9;
//    return $result;
    return ($number % 2 == 0) ? $number * 8 : $number * 9;
}