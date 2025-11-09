<?php
    $speed = readline();

    if ($speed <= 10) {
        echo "slow";
    } elseif (10 < $speed and $speed <= 50) {
        echo "average";
    } elseif (50 < $speed and $speed <= 150) {
        echo "fast";
    } elseif (150 < $speed and $speed <= 1000) {
        echo "ultra fast";
    } else {
        echo "extremely fast";
    }
?>