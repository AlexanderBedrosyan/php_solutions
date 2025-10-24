<?php

$square_price = 7.61;
$discount = 18 / 100;

$backyard_squares = readline();

$total_price_without_discount = $backyard_squares * $square_price;
$discount_price = $total_price_without_discount * $discount;
$final_price = $total_price_without_discount - $discount_price;

printf('The final price is: %.2f lv.', $final_price);
echo "\n";
printf('The discount is: %.2f lv.', $discount_price);