<?php
# lancement de session
// création de l'id de session
    // Si elle n'existe pas encore
    // Sinon elle continue la session en cours
// du cookie (contient que l'id de session)
// et du fichier temporaire côté serveur (contient les données de session)
session_start();

# si nous ne somme pas connectés, ou plus valablement connecté 
if(!isset($_SESSION['monid']) || $_SESSION['monid']!=session_id()){
    //tentative d'attaque (ou time out ;-)

    # redirection sur l'accueil
    header("Location: ./");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple 3 | Adminstration</title>
</head>
<body>
    <nav> 
      <a href="./"> Accueil  </a>  | <a href="about.php"> A propos de nous </a> | <a href="disconnect.php">Déconnexion</a>
    </nav>
    <h1> Exemple 3 | Accueil </h1>
    <p> Du blabla de la page d'accueil</p>
</body>
</html>