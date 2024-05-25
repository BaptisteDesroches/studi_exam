<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Page jeux vidéo recherche</title>
</head>

<?php

$table ="videogames";
$bdd = new PDO('mysql:host=localhost;dbname=videogames;charset=utf8', 'root', '');
$reponse = $bdd->query('select * from '.$table);

?>
<form method="GET">
    <input type="search" name="s" placeholder="Rechercher un jeu">
    <input type="submit" name="envoyer" placeholder="Rechercher">
</form>

<footer>
</footer>