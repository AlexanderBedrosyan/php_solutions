<?php
    $figure_type = readline();

    if ($figure_type == "square") {
        $side = readline();
        printf("%.3f", $side * $side);
    }

    if ($figure_type == "rectangle") {
        $side = readline();
        $side2 = readline();
        printf("%.3f", $side * $side2);
    }

    if ($figure_type == "circle") {
        $r = readline();
        printf("%.3f", ($r * $r) * pi());
    }

    if ($figure_type == "triangle") {
        $side = readline();
        $h = readline();
        printf("%.3f", ($side * $h) / 2);
    }
?>
