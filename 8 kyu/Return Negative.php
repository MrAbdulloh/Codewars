<?php
// https://www.codewars.com/kata/55685cd7ad70877c23000102/train/php

## 1 method
function makeNegative($num)
{
    if ($num > 0) {
        return -$num;
    }
    return $num;

}

## 2 method
function makeNegatives($num){


    return -abs($num);

}