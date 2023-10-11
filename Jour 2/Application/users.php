<?php
session_start();

require_once("functions.php");

require_once("templates/header.html");
?>
        <h1>Liste des utilisateurs</h1>
        <?php
            $connexion = new PDO('mysql:host=localhost;dbname=php', 'root', '');
            
            // récupération en base de donnée des utilisateurs

        ?>

        <table>
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Username</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    // Pour chaque utilisateur, afficher un élément <tr> qui contient deux éléments <td> avec les informations de celui-ci

                ?>
            </tbody>
        </table>





require_once("templates/footer.html");