<?php
# lancement de session
// création de l'id de session
// Si elle n'existe pas encore
// Sinon elle continue la session en cours
// du cookie (contient que l'id de session)
// et du fichier temporaire côté serveur (contient les données de session)
session_start();

//chargement de variables de connexion 
require_once "config.php";

// si on a envoyé le formulaire

if (isset($_POST['login'], $_POST['pwd'])) {


    //on recrée un id dans le cookie et on supprime l'ancien
    // fichier server (true) mode parano !
    session_regenerate_id(true);

    //vérification des entrées
    if ($login === $_POST['login'] && $pwd === $_POST['pwd']) {
        // si valide, on prend tous les champs
        //$_POST (ce qui efface les variables qui aurient existé avant)
        $_SESSION = $_POST;
        $_SESSION['monid']=session_id();
        //pxd étant dangereux, on va l'effacer de la session
        unset($_SESSION['pwd']);
        //redirection vers l'admin
          # redirection sur l'accueil
    header("Location: admin.php");
    exit();
    } else {
        $error = "login et/ou mot de passe incorrecte";
    }
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple 3 | Connexion</title>
</head>

<body>
    <nav>
        <a href="./"> Accueil </a> | <a href="about.php"> A propos de nous </a> | Connexion
    </nav>
    <h1> Exemple 3 | Connexion </h1>
    <p> Veullez vous connecter</p>

    <?php
    if (isset($error)):
    ?>

        <h3 style="color: red"><?= $error ?></h3>

    <?php
    endif;
    ?>


    <form action="" method="post" name="connexion">

        <input type="text" name="login" placeholder="votre pseudo"> <br>
        <input type="text" name="pwd" placeholder="votre mot de passe"> <br>
        <input type="submit" value="Se connecter">
    </form>

    <?php var_dump($_SESSION); ?>
</body>

</html>