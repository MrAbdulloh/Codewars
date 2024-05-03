<?php
function findNeedle($haystack) {
    $ans = array_search('needle', $haystack);
    return "found the needle at position $ans";

}

$x = ["hay", "junk", "hay", "hay", "moreJunk", "needle", "randomJunk"];
echo findNeedle($x);
