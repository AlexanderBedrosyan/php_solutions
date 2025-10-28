<?php

$pages = readline();
$pages_per_hour = readline();
$days = readline();

$needed_hours = (int)($pages / $pages_per_hour);

echo $needed_hours / $days;