<?php


function redirect_user_if_not_connected () {
    if (!isset($_SESSION['connected'])) {
        header('location: connection.php');
    }
}

function requete(string $requete, ?array $options = []) {
    $connexion = new PDO('mysql:host=localhost;dbname=php', 'root', '');
    $query = $connexion->prepare($requete);
    foreach ($options as $key => $value) {
        $query->bindParam($key, $options[$key]);
    }
    
    if ($query->execute()) {
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    else {
        return false;
    }
}