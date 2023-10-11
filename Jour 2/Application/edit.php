<?php

session_start();

require_once("functions.php");
redirect_user_if_not_connected();

require_once("templates/header.html");

$connexion = new PDO('mysql:host=localhost;dbname=php', 'root', '');

if (!isset($_GET['user'])) {
    header('location: users.php');
}

if (!empty($_POST)) { //La variable $_POST est-elle vide ?
    if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['username'])) { // Les données attendues ont-elles bien été envoyées ?
        $resultat = requete(
            "UPDATE users SET email = :email, password = :password, username = :username WHERE id = :id",
            [
                ':email' => $_POST['email'],
                ':password' => $_POST['password'],
                ':username' => $_POST['username'],
                ':id' => $_GET['user']
            ]
        );
        if ($resultat !== false) {
            echo "<p>Utilisateur mis à jour.</p>";
        }
        else {
            echo "<p>Erreur lors de la modification du compte.</p>";
        }
    }
}

$user = requete(
    "SELECT * FROM users WHERE id = :id",
    [':id' => $_GET['user']]
);

if (!$user) {
    header('location: users.php');
}

?>
        <h1>Edition</h1>
        <form method="post">
            <input type="email" name="email" placeholder="Email" value="<?=$user[0]['email']?>">
            <input type="text" name="password" placeholder="Password" value="<?=$user[0]['password']?>">
            <input type="text" name="username" placeholder="Username" value="<?=$user[0]['username']?>">
            <input type="submit" value="Save">
        </form>

<?php
require_once("templates/footer.html");