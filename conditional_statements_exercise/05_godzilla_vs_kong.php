<?php
$budget = floatval(readline());
$statists = intval(readline());
$clothes_price_per_statist = floatval(readline());

// Декор = 10% от бюджета
$decor_price = $budget * 0.10;

// Цена за облекло
$clothes_total = $statists * $clothes_price_per_statist;

// Ако статистите са повече от 150 → 10% отстъпка
if ($statists > 150) {
    $clothes_total *= 0.90; // 10% отстъпка
}

$total_cost = $decor_price + $clothes_total;

if ($total_cost > $budget) {
    $needed = $total_cost - $budget;
    echo "Not enough money!\n";
    printf("Wingard needs %.2f leva more.", $needed);
} else {
    $left = $budget - $total_cost;
    echo "Action!\n";
    printf("Wingard starts filming with %.2f leva left.", $left);
}
?>
