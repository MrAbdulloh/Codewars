<?php
function find_average($array): float {
    if (empty($array)) {
        return 0;
    }
    else {
        return floatval(array_sum($array) / count($array));
    }

    ## 2 method
    # return $array ? array_sum($array)/count($array) : 0;
}