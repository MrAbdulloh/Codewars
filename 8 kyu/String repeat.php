<?php
//https://www.codewars.com/kata/57a0e5c372292dd76d000d7e/train/php
function repeatStr($n, $str)
{
    ## 1 method
//    $ans = '';
//    for ($i = 0; $i < $n; $i++) {
//        $ans .= $str;
//    }
//    return $ans;
    ## 2 method
    return str_repeat($str, $n);
}

echo repeatStr(3, '*');
