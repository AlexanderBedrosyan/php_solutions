<?php

$chicken = 10.35;
$fish = 12.40;
$vegan = 8.15;
$desert = 0.20;
$takeaway = 2.50;

$order_chicken = readline();
$order_fish = readline();
$order_vegan = readline();

$total_order = $chicken * $order_chicken + $fish * $order_fish + $order_vegan * $vegan;
echo ($total_order * $desert + $takeaway + $total_order);