<?php

$connexion = new PDO('mysql:host=localhost;dbname=php', 'root', '');

$requete = $connexion->prepare("SELECT * FROM users");
$requete->execute();
$resultats = $requete->fetchAll(PDO::FETCH_ASSOC);

var_dump($resultats);