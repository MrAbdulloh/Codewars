<?php
function smash(array $words): string {
//    return implode(" ", $words);
    return join(" ", $words);
}
$x = ['hello', 'world', 'this', 'is', 'great'];
echo smash($x);