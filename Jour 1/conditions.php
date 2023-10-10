<?php

$a = 15;
$b = 15;

// < > <= >= == === != !==
// ! sert à inverser le résultat d'un test

// && et
// || ou

if ($a == $b) {
    echo '$a est égal à $b.';
}

if ($a < 10) {
    echo '$a est inferieur à 10.';
} else if ($a < 9) {
    echo '$a est inferieur à 9.';
} else if ($a < 8) {
    echo '$a est inferieur à 8.';
} else if ($a < 7) {
    echo '$a est inferieur à 7.';
} else {
    echo '$a est supérieur ou égal à 10.';
}

switch ($a) {
    case 10:
        echo '$a vaut 10';
        break;

    case 11:
        echo '$a vaut 11';
        break;

    default:
        echo '$a vaut autre chose.';
}