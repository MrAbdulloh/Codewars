<?php
function betterThanAverage($classPoints, $yourPoints) {
    $class_average = array_sum($classPoints) / count($classPoints);

    # Add your score to the class scores and calculate the new average
    $combined_scores = $classPoints + [$yourPoints];
    $combined_average = array_sum($combined_scores) / count($combined_scores);

    # Compare your score with the new average
    return $yourPoints > $class_average;
}