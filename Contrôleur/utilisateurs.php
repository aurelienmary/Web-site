<?php
if (!isset($_GET ['fonction']) || empty($_GET['fonction']))
    {
        $function ="accueil";
    }
else 
    {
        $function=$_GET['function'];
    }
    
switch ($function)
    {
        case "acceuil":
            /*
             affichage de la vue de l'acceuil
             */
            $vue="accueil";
            $title="Accueil";
            break;
            
        case "connexion":
            /*
             affichage de la vue de connexion
             */
            $vue="connexion";
            $title="Connexion";
            break;
    }
 
include ('vues/header.php');
include ('vues/' . $vue . '.php');
include ('vues/footer.php');