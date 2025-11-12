<?php

$points = readline();
$additional_points = 0;
$total_points = 0;

if ($points % 2 == 0) {
    $additional_points += 1;
}

if ($points % 10 == 5) {
    $additional_points += 2;
}

if ($points <= 100) {
    $total_points += 5;
} elseif ($points > 100 && $points <= 1000) {
    $total_points = $points * 1.20;
} else {
    $total_points = $points * 1.10;
}

echo $total_points + $additional_points . "\n";
echo $points + $total_points + $additional_points;

?>