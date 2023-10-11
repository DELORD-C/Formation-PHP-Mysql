<?php

session_start();

require_once("functions.php");

require_once("templates/header.html");

$connexion = new PDO('mysql:host=localhost;dbname=php', 'root', '');

if (!empty($_POST)) { //La variable $_POST est-elle vide ?
    if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['username'])) { // Les données attendues ont-elles bien été envoyées ?
        $requete = $connexion->prepare("UPDATE users SET email = :email, password = :password, username = :username WHERE id = :id");
        $requete->bindParam(':email', $_POST['email']);
        $requete->bindParam(':password', $_POST['password']);
        $requete->bindParam(':username', $_POST['username']);
        $requete->bindParam(":id", $_GET['user']);
        if ($requete->execute()) {
            echo "<p>Utilisateur mis à jour.</p>";
        }
        else {
            echo "<p>Erreur lors de la modification du compte.</p>";
        }
    }
}

$requete = $connexion->prepare("SELECT * FROM users WHERE id = :id");
$requete->bindParam(":id", $_GET['user']);
$requete->execute();
$user = $requete->fetch(PDO::FETCH_ASSOC);



?>
        <h1>Edition</h1>
        <form method="post">
            <input type="email" name="email" placeholder="Email" value="<?=$user['email']?>">
            <input type="text" name="password" placeholder="Password" value="<?=$user['password']?>">
            <input type="text" name="username" placeholder="Username" value="<?=$user['username']?>">
            <input type="submit" value="Save">
        </form>

<?php
require_once("templates/footer.html");