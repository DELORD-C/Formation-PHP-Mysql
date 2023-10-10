<?php

function direBonjour () {
    echo 'Bonjour';
    echo '<br>';
}

function direBonjourXFois ($x, $prenom) {
    $i = 0;
    do {
        echo 'Bonjour ' . $prenom;
        echo '<br>';
        $i++;
    } while ($i < $x);
    return 15;
}

$retour = direBonjourXFois(2, "Yvan");
var_dump($retour);