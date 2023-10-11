# PHP Mysql

## Liens utiles

GitHub du projet :
> https://github.com/DELORD-C/PHP-Mysql-09-10-2023

Conférence :
> https://bbb.dawan.fr/b/cle-hci-tyj-dqt

Wamp :
> https://sourceforge.net/projects/wampserver/files/WampServer%203/WampServer%203.0.0/wampserver3.3.0_x64.exe/download

Localhost :
> http://localhost

PHPMyAdmin :
> http://localhost/phpmyadmin

HTML & CSS :
> https://hedgedoc.dawan.fr/GQ-SVoCaQHKD5piRodprBg

Php Intermediaire (Programmation orientée objet)
> https://hedgedoc.dawan.fr/4k6xhPSDTf2qyJilq0S0yQ

Doc PHP
> https://php.net

Doc HTML :
> https://developer.mozilla.org/fr/docs/Web/HTML


## Lexique :

string : chaine de caractères


## Types de donnée :

- Chaine de charactère (String) -> dont chemin vers fichier et image 
- Nombre entier (Integer)
- Nombre décimal (Float)
- Tableaux (Array)
- Objects par exemple PDO est un object
- Booleans(vrai ou faux)

## Opérateurs de comparaison :

- `==` égal
- `!=` pas égal
- `===` égal et de même type (caractère, chiffre...)
- `!==` pas égal et pas de même type (caractère, chiffre...)
- `>` supérieur
- `>=` supérieur ou égal
- `<` inférieur
- `<=` inférieur ou égal
- `!` sert à inverser une valeur


## Conditions



## Généralités

Pour commencer un script php, toujours mettre une balise `<?php`
le ; est obligatoire pour terminer une instruction
le $ sert pour les variables
"" ou '' servent pour les chaines de caractères
echo pour afficher un nombre ou une chaine de caractère
lorsqu'on utilise = pour définir/redéfinir la valeur d'une variable, ce qui a été fait avant n'est plus pris en compte car surchargé
$entier++ encrémentation de 1 de la valeur précédente de $entier
// pour commenter une ligne
. permet d'ajouter des autres info et donc de concaténer
Exemple
```php=
$texte = $texte."!!";
```

switch permet d'éviter les if à répétition pour tester plusieurs valeurs
dans la condition if, le || correspond au OU, && pour ET

dans tableau on associe tjs un index avec une valeur

var_dump permet d'afficher un tableau ou tout autre type de variable, il sert pour le débug.

les boucles
3 fonctions différentes :
do while : fait ca tant que
for
foreach : pour chaque élément d'un tableau

sort : pour classer un tableau


pour les fontions : il faut la définir et ensuite l'appeler
une fonction peut demander des paramètres entre ()

HTML
structure de base est tjs la même
dans vs code le ! écrit la base dun doc html

avec php on peut faire du html
balise ?> pour fermer le php

## Exercice 1

Créer une fonction qui s'appelle quiEstLeMeilleurProf(). Elle doit retourner `Le prof de programmation Web`
____

Créer une fonction qui s'appelle jeRetourneMonArgument(). Exemple : jeRetourneMonArgument(123) retournera `123`
jeRetourneMonArgument('test') retournera `test`
____
Créer une fonction qui s'appelle concatenation(). Elle prendra deux arguments de type string. Elle devra retourner la concatenation des deux. Exemple : argument 1 = Antoine, Argument 2 = Griezmann; Resultat : `AntoineGriezmann`
____
Créer une fonction qui s'appelle multiplication(). Elle prendra deux arguments de type int. Elle devra retourner la multiplication des deux. Exemple : argument 1 = 5 Argument 2 = 5 ; Resultat : `25`
____
Créer une fonction qui s'appelle estIlMajeure(). Elle prendra un argument de type int. Elle devra retourner un boolean. Si age >= 18 elle doit retourner true si age < 18 elle doit retourner false Exemple : age = 5 ==> `false` age = 34 ==> `true`
____
Créer une fonction qui s'appelle plusGrand(). Elle prendra deux arguments de type int. Elle devra retourner le plus grand des deux.
____
Créer une fonction qui s'appelle plusPetit(). Elle prendra trois arguments de type int. Elle devra retourner le plus petit des trois.
____
Créer une fonction qui s'appelle premierElementTableau(). Elle prendra un argument de type array. Elle devra retourner le premier élement du tableau. Si l'array est vide, il faudra retourner null;

indice : chercher dans la doc php (php.net) ou sur google, la fonction php qui permet de récupérer le premier élément d'un tableau;
____
Créer une fonction qui s'appelle plusGrand(). Elle prendra un argument de type array. Elle devra retourner le plus grand des élements présent dans l'array. Si l'array est vide, il faudra retourner null;
____
Créer une fonction qui s'appelle verificationPassword(). Elle prendra un argument de type string. Elle devra retourner un boolean qui vaut true si le password fait au moins 8 caractères et false si moins.
____
Créer une fonction qui s'appelle capital(). Elle prendra un argument de type string. Elle devra retourner le nom de la capitale des pays suivants :

France ==> Paris
Allemagne ==> Berlin
Italie ==> Rome
Maroc ==> Rabat
Espagne ==> Madrid
Portugal ==> Lisbonne
Angleterre ==> Londres
Tout autre pays ==> Inconnu
Il faudra utiliser la structure SWITCH pour faire cet exercice.


## Exercice 2

Créer une fonction listHTML qui prendra 2 arguments

listHTML(string $titre, array $liste): string

Le premier paramètre est une chaine de caractère (le titre de la liste)
Le deuxième paramètre est un tableau contenant les éléments de la liste

Si le titre ou la liste sont null ou vide, la fonction doit retourner null.

Exemple :

```html=
echo listeHTML("Capitale", ["Paris", "Berlin", "Moscou"]);
```
-> Affiche
<h1>Capitale</h1>
<ul>
    <li>Paris</li>
    <li>Berlin</li>
    <li>Moscou</li>
</ul>


```html=
echo listeHTML("Fruits", ["Melon", "Pomme", "Pèche", "Fraise"]);
```
-> Affiche
<h1>Fruits</h1>
<ul>
    <li>Melon</li>
    <li>Pomme</li>
    <li>Pèche</li>
    <li>Fraise</li>
</ul>


## Exercice 3

Créer une page affichant un formulaire avec les champs suivants :

- Nom (texte)
- Prénom (texte)
- Mail (email)
- Téléphone (texte)
- Situation maritale (selection dans liste déroulante)
- Avez vous déjà suivi une formation Dawan
    - Case à cocher oui / non
- Observations (champs textarea)
- "J'accepte les conditions d'utilisations" (case à cocher)
- Bouton d'envoi

Bonus : Lorsque l'on clique sur le bouton d'envoi, si nous n'avons pas rempli un champ, le navigateur nous bloque en nous indiquant quel champ pose problème
CF : https://developer.mozilla.org/fr/docs/Web/HTML/Attributes/required

```htmlmixed=
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form method="post" action="form2.php">
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
```

fonction date permet de récuppérer un timestamp

## Exercice 4

- Créer une fonction qui s'appelle `remplacerLesLettres(string $arg)`. Elle prendra un argument de type string. Elle devra retourner cette même string mais en remplacant les e par des 3, les i par des 1 et les o par des 0 Exemple :
input : "Bonjour les amis" ==> Output : B0nj0ur l3s am1s
input : "Les cours de programmation Web sont trops cools" ==> Output : L3s c0urs d3 pr0grammat10n W3b s0nt tr0ps c00ls

- Créer une fonction qui s'appelle quelleAnnee(). Elle devra retourner un nombre entier representant l'année actuelle. ex : `2023`

- Créer une fonction qui s'appelle quelleDate(). Elle devra retourner une string representant la date dans 1 an et 3 jours sous le format suivant DD/MM/YYYY

- Créez une fonction `acronyme(string $arg)` qui prend en argument une string et qui retourne les initiales de chaque mot en majuscule.

___


#### Bataille navale

![](https://hedgedoc.dawan.fr/uploads/upload_2d71002a2fb84d88fd8cf6c994d5b8eb.png)

Ci-dessus un tableau de 10 cases sur 10, vous devez créez une fonction `jouer($x, $y)` qui prend deux arguments, le premier de type string le second de type int, ce seront les coordonnées horizontales et verticales du tableau.

Votre fonction doit retourner trois valeurs différentes:

- [1] Si les coordonnées correspondent à une case grise, votre fonction doit afficher touché.
- [2] Si les coordonnées correspondent à une case blanche, votre fonction doit afficher loupé.
- [3] Si les coordonnées ne correspondent à aucune case, votre fonction doit afficher hors-jeu.

Contrainte: Vous ne devez pas dépasser 30 lignes, avec un code correctement indenté.

Exemple

En entrée:

```bash=
f, 5
```


En sortie:

```bash=
touché
```

___

Écrivez une fonction number() pour afficher les nombres, de 4 à 12 en utilisant la boucle PHP. Vous pouvez utiliser soit la boucle « for » ou « while »

```bash=
number()

Sortie :
4
5
6
7
8
9
10
11
12
```

___

Écrivez une fonction numbers($start, $end) pour afficher les nombres, de $start à $end en utilisant la boucle PHP. Vous pouvez utiliser soit la boucle « for » ou « while »

Sortie :
```bash=
numbers(2, 7)

#Sortie :
2
3
4
5
6
7
```

___

Écrivez une fonction numbersp($start, $end, $step) pour afficher les nombres, de $start à $end tous les $step nombres en utilisant la boucle PHP. Vous pouvez utiliser soit la boucle « for » ou « while »

Sortie :
```bash=
numbers(2, 10, 2)

#Sortie :
2
4
6
8

numbers(1, 17, 5)

#Sortie :
1
6
11
16
```

___

Écrivez une fonction PHP unique($tab) pour supprimer les doublons d’un tableau trié et le retourner.

```bash=
var_dump(unique([8, 8, 8, 9, 10, 6, 4, 4, 5]))

#Sortie :
array (size=6)
    0 => 4,
    1 => 5,
    2 => 6,
    3 => 8,
    4 => 9,
    5 => 10
```

$_SESSION permet de démarrer une session

## Exercice Session

Dans l'application (récupérer le code sur github), afficher sur la page de dashboard la dernière date de connexion au format : `JJ/MM/AAAA - HH:MM`

Utiliser la session pour stocker la date lors de l'accès et pour afficher l'ancienne dans la page.


# Exercices Base de donnée

- [x] - Connectez vous à votre base de données MySQL, à l’aide de l’interface PhpMyAdmin http://localhost/phpmyadmin.
- [x] - Créez une base de données `location_de_voiture`
- [x] - Créez une table voiture contiendra les colonnes suivantes.
    - id type INT clé primaire A_I
    - immatriculation de type VARCHAR et de longueur maximale 20
    - marque de type VARCHAR est de longueur maximale 20.
    - Modele de type VARCHAR est de longueur maximale 20.
    - Cylindree de type SMALLINT est cylindrée en cm3.
    - dateachat de type DATE


- [x] - Créez une table clients contiendra les colonnes suivantes.
    - id de type INT est le numéro client unique clé primaire A_I
    - Nom de type VARCHAR(40) est le nom du client
    - Prenom de type VARCHAR(40) est le prénom du client
    - CodePostal de type VARCHAR(10) est le Code postal
    - Localite de type VARCHAR(50) est la localité de résidence
    - Rue de type VARCHAR(80) est l’adresse
    - Numero de type VARCHAR(10) est le numéro de maison
    - Telephone de type VARCHAR(40) est le numéro de téléphone
    - Email de type VARCHAR(50) est l’adresse mail

- [x] - Créez une table locations contiendra les colonnes suivantes.
    - IdClient de type INT est le numéro client unique
    - IdLocation de type INT est le numéro client unique
    - immatriculation de type VARCHAR et de longueur maximale 20
    - DateDebut de type DATETIME Date et heure de début
    - DateFin DATETIME Date de type et heure de fin prévue
    - DateRentree DATETIME Date de rentrée effective du véhicule (pour surtaxe)
    - Assurance BOOL Indique si une assurance complémentaire a été prise

- [x] - Ecrire une page web en PHP nommée `formulaireVoiture.php` qui affiche un formulaire permettant de saisir les données de la table voiture. 
- [x] - Modifier la page formulaireVoiture.php afin de ne soumettre le formulaire uniquement si tous les champs sont remplis.
- [x] - Faire en sorte de centrer le contenu des pages `formulaireVoitures.php`.
- [x] - Dans une nouvelle page créer un formulaire permettant l’insertion de nouvelles données dans la table client `formulaireClients.php`.
- [x] - Un nouveau formulaire permettant l’insertion de nouvelles données dans la table location, via une nouvelle page php `formulaireLocation.php`.
- [x] - Réaliser trois fichiers PHP :
    - `affichageVoitures.php`:Contient un tableau permettant d’afficher la liste des voitures enregistrés dans la base.
    - `affichageClients.php`:Contient un tableau permettant d’afficher la liste des clients enregistrés dans la base.
    - `affichageLocations.php`:Contient un tableau permettant d’afficher la liste des locations enregistrés dans la base.
- [x] - Ajouter les pages au menu de navigation de votre application

___
Bonus
- [x] - Créer un formulaire de recherche permettant de retrouver tous les clients qui ont loué un type de véhicule de marque et de modèle donnés. Afficher les résultats sous forme de tableau.
- [x] - Créer un formulaire de recherche permettant de retrouver tous les véhicules louées par une personne donnée. Afficher les résultats sous forme de tableau.