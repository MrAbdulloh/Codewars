<?php
function oddCount($n): int
{
    ## 1 - method
//    $result = 0;
//    for ($i = 1; $i < $n; $i++) {
//        if ($i % 2 >= 1) {
//            $result ++;
//        }
//    }
//    return $result;

    ## 2- method

//    $len = 1;
//    $result = 0;
//    while ($len < $n) {
//        if ($len % 2 >= 1) {
//            $result += 1;
//        }
//        $len++;
//    }
//    return $result;

    # 3 method Big O(1)
    if ($n % 2 == 0) {
        return $n / 2;
    } else {
        return ($n - 1) / 2;
    }

}

echo oddCount(15);