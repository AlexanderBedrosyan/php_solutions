<?php
    $puzzle = 2.60;
    $speaking_doll = 3;
    $bear = 4.10;
    $minion = 8.20;
    $truck_toy = 2;

    $travel_price = readline();
    $num_puzzles = readline();
    $num_dolls = readline();
    $num_bears = readline();
    $num_minions = readline();
    $num_trucks = readline();

    $total_number = $num_puzzles + $num_dolls + $num_bears + $num_minions + $num_trucks;
    $total_price = $num_puzzles * $puzzle + $num_dolls * $speaking_doll + $num_minions * $minion + $truck_toy * $num_trucks + $num_bears * $bear;

    $discount = 0;
    if ($total_number > 50) {
        $discount = $total_price * 0.25;
    }
    
    $final_price = $total_price - $discount;
    $rent = $final_price * 0.10;

    echo $final_price - $rent - $travel_price;
?>