<?php
function get_average($a) {
    $sum = array_sum($a);
    return intval($sum / count($a));

}
$s = [1, 2, 3, 4, 5];
print get_average($s);