<?php
function tribonacci($signature, $n)
{
    if ($n == 0) {
        return [];
    }
    $tribonacci_sequence = $signature;
    for ($i = 3; $i < $n; $i++) {
        $next_number = $tribonacci_sequence[$i - 1] + $tribonacci_sequence[$i - 2] + $tribonacci_sequence[$i - 3];
        $tribonacci_sequence[] = $next_number;
    }
    return array_slice($tribonacci_sequence, 0, $n);
}

