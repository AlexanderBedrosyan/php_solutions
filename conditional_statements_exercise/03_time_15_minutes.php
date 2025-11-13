<?php
$hour = intval(readline());
$minutes = intval(readline());

$total_minutes = $hour * 60 + $minutes + 15;

$new_hour = intdiv($total_minutes, 60) % 24;
$new_minutes = $total_minutes % 60;

printf("%d:%02d", $new_hour, $new_minutes);
?>

