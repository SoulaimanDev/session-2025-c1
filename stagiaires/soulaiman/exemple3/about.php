<?php
# lancement de session
// création de l'id de session
    // Si elle n'existe pas encore
    // Sinon elle continue la session en cours
// du cookie (contient que l'id de session)
// et du fichier temporaire côté serveur (contient les données de session)
session_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple 3 | Accueil</title>
</head>
<body>
    <nav> 
        <a href="./"> Accueil </a>|  A propos de nous | <a href="connect.php">Connexion</a>
    </nav>
    <h1> Exemple 3 | A propos de nous</h1>
    <p> A propos de nous webdev 1</p>
</body>
</html>