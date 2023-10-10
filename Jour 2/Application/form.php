<?php

// stocke les données envoyées par l'utilisateur dans la base de donnée

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
        <form method="post">
        <input type="text" placeholder="nom" name="nom" ><br/>
        <input type="text" placeholder="prenom" name="prenom"><br/>
        <input type="email" placeholder="email" name="email" ><br/>
        <input type="text" placeholder="telephone" name="telephone" ><br/>
        <input type="text" placeholder="mot de passe" name ="mot de passe"><br/>
        <select>
                <option value="married">situation maritale</option>
                <option value="html">oui</option>
                <option value="css">non</option>
        </select><br/>
        <legend>Avez vous déjà suivi une formation Dawan</legend>
        <input type="checkbox" name="Avez vous déjà suivi une formation Dawan" value="Avez vous déjà suivi une formation Dawan" /><br/>
        <textarea placeholder="observation" name ="observation"></textarea><br/>
        <legend>J'accepte les conditions d'utilisations</legend>
        <input type="checkbox" name="J'accepte les conditions d'utilisations" value="J'accepte les conditions d'utilisations" /><br/>
        <input type="submit" value="Envoyer le formulaire" />
</html>