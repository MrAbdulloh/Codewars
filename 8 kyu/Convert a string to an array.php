<?php
function string_to_array($s)
{
    $a = explode(" ", $s);
    return $a;
}

$x = "I love arrays they are my favorite";
print_r(string_to_array($x));