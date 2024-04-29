<?php
// https://www.codewars.com/kata/53369039d7ab3ac506000467/train/php

//function boolToWord($bool)
//{
//    if ($bool) {
//        return 'Yes';
//    } else {
//        return 'No';
//    }
//}
function boolToWord($bool)
{
    return $bool == true ? 'Yes' : "No";
}
echo boolToWord(false);