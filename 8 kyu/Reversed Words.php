<?php
function reverseWords($str)
{
    $a = explode(" ", $str);
    $r =  array_reverse($a);
    $result = implode(" ", $r);
    return $result;
}
$x = "The greatest victory is that which requires no battle";
echo reverseWords($x);