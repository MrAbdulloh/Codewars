<?php
function monkeyCount($n) {
    $ans = [];
    for ($i = 1; $i <= $n; $i++) {
        $ans[] += $i;
    }
    return $ans;
}
print_r(monkeyCount(10));