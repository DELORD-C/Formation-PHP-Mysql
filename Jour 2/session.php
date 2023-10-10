<?php

session_start();

if ($_SESSION['acces'] == 'true') {
    //procéder à l'affichage de la page
}
else {
    //rediriger la personne vers le formulaire de connection
}