<?php
session_start();

require_once("functions.php");
redirect_user_if_not_connected();

if (!isset($_GET['user'])) {
    header('location: users.php');
}

requete(
    "DELETE FROM users WHERE id = :id",
    [":id" => $_GET['user']]
);

header('location: users.php');