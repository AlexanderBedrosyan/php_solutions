<?php

$long = readline();
$width = readline();
$high = readline();
$percentage = readline();

$V = $long * $width * $high;
$liters = $V * 0.001;

echo $liters * (1 - $percentage /100);