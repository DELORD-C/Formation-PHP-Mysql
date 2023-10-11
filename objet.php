<?php

class Voiture {
    public $cylindree;
    public $portes;
    public $marque;
    public $modele;

    public function accelerer() {
        echo "vroom vroom !";
    }
}

$voiture = new Voiture();

var_dump($voiture);

$voiture->accelerer();