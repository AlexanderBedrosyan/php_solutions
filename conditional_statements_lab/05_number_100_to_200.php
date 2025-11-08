<?php
    $num = readline();

    if ($num < 100) {
        echo "Less than 100";
    } elseif ($num >= 100 and $num <= 200) {
        echo "Between 100 and 200";
    } else {
        echo "Greater than 200";
    }
?>