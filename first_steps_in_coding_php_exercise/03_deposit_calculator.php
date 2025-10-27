<?php

$deposit_amount = readline();
$time_for_dep = readline();
$anual_rate = readline();

$total_for_year = $deposit_amount * ($anual_rate / 100);
$per_month = $total_for_year / 12;
$final_amount = $deposit_amount + $time_for_dep * $per_month;

echo $final_amount;