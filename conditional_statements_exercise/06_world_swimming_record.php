<?php
$record = floatval(readline());
$distance = floatval(readline());
$time_per_meter = floatval(readline());

// Времето без забавянето
$base_time = $distance * $time_per_meter;

// Забавяне от водата: на всеки 15 м → +12.5 сек
$delays = floor($distance / 15);
$delay_time = $delays * 12.5;

// Общо време
$total_time = $base_time + $delay_time;

if ($total_time < $record) {
    printf("Yes, he succeeded! The new world record is %.2f seconds.", $total_time);
} else {
    $slower = $total_time - $record;
    printf("No, he failed! He was %.2f seconds slower.", $slower);
}
?>
