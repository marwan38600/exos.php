<?php
require_once("./class-pookemon.php");

$pikachu = new Monster(100, 20, "Pikachu", rand(40, 50));
$mewtwo = new Monster(100, 25, "Mewtwo", rand(40, 50));

do {
    $pikachu->attack($mewtwo);
    $mewtwo->attack($pikachu);
    $mewtwo->healingChance();
    $pikachu->healingChance();
} while ($pikachu->pv > 0 && $mewtwo->pv > 0);




var_dump($pikachu);
var_dump($mewtwo);