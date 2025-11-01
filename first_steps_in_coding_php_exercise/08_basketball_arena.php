<?php

$anual_price = readline();

$shoes = 0.60 * $anual_price;
$equipment = 0.80 * $shoes;
$ball = 0.25 * $equipment;
$accessories = 0.20 * $ball;

echo $shoes + $equipment + $ball + $accessories + $anual_price;

