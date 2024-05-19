<?php
function disemvowel($string)
{

    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

    $result = str_replace($vowels, '', $string);
    return $result;

    ##   return preg_replace("/[aeiou]/i", "", $string);

}