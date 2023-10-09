<?php

$tab = [
    10,
    54,
    69,
    10056,
    "Test",
    [1, 2, 3, 4]
];

$tab2 = [
    "a" => 10,
    "b" => 54,
    "c" => 69,
    "d" => 1
];

$tab2["a"]++;

$tab2["e"] = 10;

$tab3 = [99 => 0];

array_push($tab3, "Bonjour");

var_dump($tab2);