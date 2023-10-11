<?php

session_start();

    if (isset($_SESSION['connected'])) {
        header('location: dashboard.php');
    }

    if (!empty($_POST)) { //La variable $_POST est-elle vide ?
        if (isset($_POST['email']) && isset($_POST['password'])) { // Les données attendues ont-elles bien été envoyées ?

            $connexion = new PDO('mysql:host=localhost;dbname=php', 'root', '');
            $requete = $connexion->prepare("SELECT * FROM users WHERE email = :mail");
            $requete->bindParam(':mail', $_POST['email']);
            $requete->execute();
            $resultat = $requete->fetch(PDO::FETCH_ASSOC);

            if ($resultat) {
                if ($resultat['password'] == $_POST['password']) {
                    $_SESSION['connected'] = $resultat['id'];
                    header('location: dashboard.php');
                }
            }
            echo "<p>Mauvaise combinaison email / mot de passe</p>";
        }
    }

require_once("templates/header.html");
?>
        <h1>Connexion</h1>
        <form method="post">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" value="Send">
        </form>

<?php
require_once("templates/footer.html");