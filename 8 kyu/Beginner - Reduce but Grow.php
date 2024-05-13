<?php
function grow($a) {
   $ans = 1;
    foreach ($a as $item) {
        $ans *= $item;
   }
    return $ans;
}