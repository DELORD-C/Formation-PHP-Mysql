<?php
session_start();
if (!isset($_SESSION['connected'])) {
    header('location: connection.php');
}
?>
<html>
    <head></head>
    <body>
        <h1>Bienvenue sur votre tableau de bord !</h1>
        <a href="logout.php">Déconnexion</a>

        <?php
            // récupération et affichage en base de donnée des données envoyées via le formulaire
        ?>

    </body>
</html>