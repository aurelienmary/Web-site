<?php
session_start();

/**
 * MVC :
 * - index.php : identifie le routeur à appeler en fonction de l'url
 * - Contrôleur : Crée les variables, élabore leurs contenus, identifie la vue et lui envoie les variables
 * - Modèle : contient les fonctions liées à la BDD et appelées par les contrôleurs
 * - Vue : contient ce qui doit être affiché
 **/

// Activation des erreurs               
ini_set('display_errors', 1);

// Appel des fonctions du contrôleur
include("C:/wamp64/www/APP-INFO/Controleur/fonctions.php");
// Appel des fonctions liées à l'affichage
<<<<<<< HEAD
//include("C:/wamp64/www/APP-INFO/Vue/fonctions.php");
=======
include("Vue/fonction.php");
>>>>>>> d12ba78c75063c29bb3c9ee1e1904768d3db8aa5

// On identifie le contrôleur à appeler dont le nom est contenu dans cible passé en GET
if(isset($_GET['cible']) && !empty($_GET['cible'])) 
    {
    // Si la variable cible est passé en GET
    $url = $_GET['cible']; //user, sensor, etc.
    } 
else 
    {
    // Si aucun contrôleur défini en GET, on bascule sur utilisateurs
    $url = 'utilisateurs';
    }

// On appelle le contrôleur
include("C:/wamp64/www/APP-INFO/Controleur/" . $url . ".php");
    