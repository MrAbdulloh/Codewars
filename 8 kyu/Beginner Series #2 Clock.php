<?php
function past($h, $m, $s) {
    $hr = $h * 3600000;
    $min = $m * 60000;
    $sek = $s * 1000;
    $sums = $hr + $min + $sek;
    return $sums;
}