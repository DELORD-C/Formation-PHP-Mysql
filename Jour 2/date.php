<?php

$actual_date = date('d/m/Y'); // date formatée actuelle
$time = time(); //timestamp actuel
$time_in_one_month = strtotime('+1 month', $time); //timestamp dans 1 mois
$date_in_one_month = date('d/m/Y', $time_in_one_month); // date formatée dans un mois

var_dump($actual_date);
var_dump($date_in_one_month);
var_dump($time);