<?php
function zeroFuel($distanceToPump, $mpg, $fuelLeft)
{

    $max_distance = $mpg * $fuelLeft;

    return $max_distance >= $distanceToPump;
}