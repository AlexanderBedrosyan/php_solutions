<?php
$series_name = readline();
$episode_duration = intval(readline());
$break_duration = intval(readline());

// Време за обяд и отдих
$lunch_time = $break_duration / 8;
$relax_time = $break_duration / 4;

// Оставащо време за гледане
$time_left = $break_duration - $lunch_time - $relax_time;

if ($time_left >= $episode_duration) {
    $free_time = ceil($time_left - $episode_duration);
    echo "You have enough time to watch $series_name and left with $free_time minutes free time.";
} else {
    $needed_time = ceil($episode_duration - $time_left);
    echo "You don't have enough time to watch $series_name, you need $needed_time more minutes.";
}
?>
