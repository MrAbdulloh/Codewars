<?php
function invert(array $a): array
{

    return array_map(fn($e) => -$e, $a);
}

var_dump(invert([-1, 2, -3, 4, -5]));