<?php

session_start();

    if (isset($_SESSION['connected'])) {
        header('location: dashboard.php');
    }

    if (!empty($_POST)) { //La variable $_POST est-elle vide ?
        if (isset($_POST['email']) && isset($_POST['password'])) { // Les données attendues ont-elles bien été envoyées ?
            if ($_POST['email'] == 'admin@aol.fr' && $_POST['password'] == 'admin') { // Les données sont elles correctes ?
                $_SESSION['connected'] = 'true';
                header('location: dashboard.php');
            }
        }
    }

?>
<html>
    <head></head>
    <body>
        <form method="post">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" value="Send">
        </form>
    </body>
</html>