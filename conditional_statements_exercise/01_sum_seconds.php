<?php
$player1 = readline();
$player2 = readline();
$player3 = readline();

$total = $player1 + $player2 + $player3;
$hours = round($total / 60, 0);
if ($total / 60 < 1) {
    $hours = 0;
}
$minutes = $total - ($hours * 60);
if (strlen($minutes) == 1) {
    $minutes = 0 . $minutes;
}
print_r($hours . ':' . $minutes);
?>