<?php
## 1 method
function even_or_odd(int $n): string {
    if ($n % 2 == 0) {
        return 'Even';
    }
    return 'Odd';
}
echo even_or_odd(3);

## 2 method
function even_odd(int $n): string
{
    return $n % 2 == 0 ? 'Even' : 'Odd';
}
echo even_odd(3);