<?php
function fake_bin(string $s): string
{
    $count = '';
    for ($i = 0; $i < strlen($s); $i++) {
        $digit = intval($s[$i]);
        if ($digit >= 5) {
            $count .= '1';
        } else {
            $count .= '0';
        }
    }
    return $count;
}