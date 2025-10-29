<?php

$pens = 5.80;
$markers = 7.20;
$prep = 1.20;

$pack_pens = readline();
$markers_pack = readline();
$liters_prep = readline();
$discount = readline() / 100;

$price_pens = $pens * $pack_pens;
$price_pack_markers = $markers * $markers_pack;
$price_prep = $prep * $liters_prep;
$total_price_without_discount = ($price_pack_markers + $price_pens + $price_prep) * (1 - $discount);
echo $total_price_without_discount;
