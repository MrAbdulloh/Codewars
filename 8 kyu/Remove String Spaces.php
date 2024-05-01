<?php
function no_space(string $s): string
{
    return str_replace(" ", "", $s);

}

$s = "8 j 8   mBliB8g  imjB8B8  jl  B";
echo no_space($s);