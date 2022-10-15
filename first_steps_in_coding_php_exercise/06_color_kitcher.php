<?php

$cover = 1.50;
$paint = 14.50;
$color_splitter = 5;

$need_quantity_cover = readline();
$need_quantity_paint = readline();
$need_quantity_color_splitter = readline();
$hours = readline();

$total_cover = ($need_quantity_cover + 2) * $cover;
$total_paint = ($need_quantity_paint * 1.10) * $paint;
$total_color_splitter = $need_quantity_color_splitter * $color_splitter;
$packages = 0.40;

$all_material_price = $total_cover + $total_paint + $total_color_splitter + $packages;
$repair_maister = ($all_material_price * 0.30) * $hours;

echo $all_material_price + $repair_maister;