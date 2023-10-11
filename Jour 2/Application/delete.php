<?php
session_start();

require_once("functions.php");

$connexion = new PDO('mysql:host=localhost;dbname=php', 'root', '');
$requete = $connexion->prepare("DELETE FROM users WHERE id = :id");
$requete->bindParam(":id", $_GET['user']);
$requete->execute();

header('location: users.php');