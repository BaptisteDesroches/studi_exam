<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Page jeux vidéo recherche</title>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "Baptdelarme-76";
    $dbname = "dp";
// Create connection
    $conn = new mysqli($servername, $username, $password, $database);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
}
    echo "Connected successfully";
    $conn = new mysqli($servername, $username, $password, $db);
    $conn->close();
?>
