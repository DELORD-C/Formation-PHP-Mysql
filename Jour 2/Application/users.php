<?php
session_start();

require_once("functions.php");

require_once("templates/header.html");
?>
        <h1>Liste des utilisateurs</h1>
        <?php
            $connexion = new PDO('mysql:host=localhost;dbname=php', 'root', '');
            $requete = $connexion->prepare("SELECT * FROM users");
            $requete->execute();
            $users = $requete->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <table>
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($users as $user) {
                        echo "<tr><td>";
                        echo $user['email'];
                        echo "</td><td>";
                        echo $user['password'];
                        echo "</td><td>";
                        echo "<a href='edit.php?user=" . $user['id'] . "'>Editer</a>";
                        echo "<a href='delete.php?user=" . $user['id'] . "'>Supprimer</a>";
                        echo "</td></tr>";
                    }
                ?>
            </tbody>
        </table>




<?php
require_once("templates/footer.html");