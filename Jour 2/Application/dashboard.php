<?php
session_start();

require_once("functions.php");
redirect_user_if_not_connected();

require_once("templates/header.html");
?>
        <h1>Bienvenue sur votre tableau de bord !</h1>
        <a href="logout.php">Déconnexion</a>
        <?php
            $connexion = new PDO('mysql:host=localhost;dbname=php', 'root', '');
            $requete = $connexion->prepare("SELECT * FROM users WHERE id = :id");
            $requete->bindParam(':id', $_SESSION['connected']);
            $requete->execute();
            $resultat = $requete->fetch(PDO::FETCH_ASSOC);

            if (!$resultat) {
                session_destroy();
                header('location: connection.php');
            }

            echo "<p>" . $resultat['email'] . "</p>";

            // récupération et affichage en base de donnée des données envoyées via le formulaire
require_once("templates/footer.html");