<?php

function jouer($x, $y) {
    $plateau = [
        1  => [0,0,0,0,0,0,0,0,0,0],
        2  => [0,0,0,0,0,0,0,0,0,0],
        3  => [0,0,0,0,0,1,0,0,0,0],
        4  => [0,0,0,0,0,1,0,0,0,0],
        5  => [0,0,0,0,0,1,0,0,1,0],
        6  => [0,0,0,0,0,0,0,0,1,0],
        7  => [0,0,0,0,0,0,0,0,0,0],
        8  => [0,0,0,0,0,0,0,0,0,0],
        9  => [0,0,1,1,1,1,0,0,0,0],
        10 => [0,0,0,0,0,0,0,0,0,0]
    ];

    $coord = [
        "a" => 0,
        "b" => 1,
        "c" => 2,
        "d" => 3,
        "e" => 4,
        "f" => 5,
        "g" => 6,
        "h" => 7,
        "i" => 8,
        "j" => 9
    ];

    $ligne = $plateau[$y];
    $colonne = $coord[$x];
    $case = $ligne[$colonne];

    if ($case == 0) {
        return "Loupé !";
    }
    else {
        return "Touché !";
    }
}

jouer('f',2);

