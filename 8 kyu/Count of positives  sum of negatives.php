<?php
function countPositivesSumNegatives($input)
{
    if (empty($input)) {
        return [];
    }
    $e_count = 0;
    $e_sum = 0;

    foreach ($input as $i) {
        if ($i > 0) {
            $e_count += 1;
        }
        else {
            $e_sum += $i;
        }
    }
    return [$e_count, $e_sum];

}
$a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15];
print_r(countPositivesSumNegatives($a));