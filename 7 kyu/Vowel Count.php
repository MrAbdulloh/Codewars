<?php
function getCount($str)
{
    $vowelsCount = 0;
    $vowels = ['a', 'e', 'i', 'o', 'u'];

    for ($i = 0; $i < strlen($str); $i++) {
        if (in_array($str[$i], $vowels)) {
            $vowelsCount++;
        }
    }

    return $vowelsCount;
    ##  return preg_match_all('/[aeiou]/i',$str,$matches);
}

$sentence = "Hello World!";
echo getCount($sentence);