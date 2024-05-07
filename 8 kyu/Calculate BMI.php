<?php
function bmi($weight, $height)
{
    $bmi_value = $weight / ($height ** 2);
    if ($bmi_value <= 18.5) {
        return 'Underweight';
    } else if ($bmi_value < 25.0) {
        return 'Normal';
    } else if ($bmi_value < 30.0) {
        return 'Overweight';
    } else {
        return 'Obese';
    }
}