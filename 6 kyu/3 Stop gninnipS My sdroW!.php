<?php
//https://www.codewars.com/kata/5264d2b162488dc400000001/train/php

function spinWords(string $str): string
{
    $words = explode(" ", $str);
    foreach ($words as &$word) {
        if (strlen($word) >= 5) {
            $word = strrev($word);
        }
    }
    $result = implode(" ", $words);
    return $result;

}

echo spinWords("Hey fellow warriors");