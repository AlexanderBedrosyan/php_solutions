<?php
$budget = floatval(readline());
$video_cards = intval(readline());
$processors = intval(readline());
$ram = intval(readline());

// Цени
$video_price = 250;
$total_video_price = $video_cards * $video_price;

// Процесор: 35% от цената на всички видеокарти
$processor_price = 0.35 * $total_video_price;
$total_processor_price = $processors * $processor_price;

// РАМ: 10% от цената на всички видеокарти
$ram_price = 0.10 * $total_video_price;
$total_ram_price = $ram * $ram_price;

// Обща сума
$total_sum = $total_video_price + $total_processor_price + $total_ram_price;

// Проверка за отстъпка
if ($video_cards > $processors) {
    $total_sum *= 0.85; // -15%
}

if ($total_sum <= $budget) {
    $money_left = $budget - $total_sum;
    printf("You have %.2f leva left!", $money_left);
} else {
    $needed = $total_sum - $budget;
    printf("Not enough money! You need %.2f leva more!", $needed);
}
?>
