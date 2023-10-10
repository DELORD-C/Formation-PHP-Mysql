<?php
session_start();

require_once("functions.php");

require_once("templates/header.html");
?>
        <h1>Bienvenue sur votre tableau de bord !</h1>
        <a href="logout.php">Déconnexion</a>

        <?php
            // récupération et affichage en base de donnée des données envoyées via le formulaire
        ?>

    </body>
</html>

<?php
require_once("templates/footer.html");