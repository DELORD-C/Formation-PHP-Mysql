<?php

session_start();

    if (isset($_SESSION['connected'])) {
        header('location: dashboard.php');
    }

    if (!empty($_POST)) { //La variable $_POST est-elle vide ?
        if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['username'])) { // Les données attendues ont-elles bien été envoyées ?
            $connexion = new PDO('mysql:host=localhost;dbname=php', 'root', '');
            $requete = $connexion->prepare("INSERT INTO users (email, password, username) VALUES (:mail, :password, :username)");
            $requete->bindParam(':mail', $_POST['email']);
            $requete->bindParam(':password', $_POST['password']);
            $requete->bindParam(':username', $_POST['username']);
            if ($requete->execute()) {
                echo "<p>Compte créé avec succès.</p>";
            }
            else {
                echo "<p>Erreur lors de la création du compte.</p>";
            }
        }
    }

require_once("templates/header.html");
?>
        <h1>Inscription</h1>
        <form method="post">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <input type="text" name="username" placeholder="Username">
            <input type="submit" value="Send">
        </form>

<?php
require_once("templates/footer.html");