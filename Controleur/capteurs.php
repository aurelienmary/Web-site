<?php
session_start();

include ("./Modele/requetes.capteurs.php");



if (!isset($_GET['fontion']) || empty([$_GET['fonction']]))
{
    $function = "capteurs";
}
else
{
    $function= $_GET['fonction'];
}

switch ($function)
{
    case 'capteurs':
        $vue="capteurs";
        $title= "Les capteurs";
        
        $liste = getusersensor($bdd, $_SESSION['id']);
        print_r($liste);
        if (empty($liste))
        {
            $alerte="Aucun capteur n'est enregistré pour le moment";
        }
        break;
        
        
    case 'ajout':
        $vue="ajout";
        $title="Ajouter un capteur";
        $alerte=false;
        
        
        
    
}


include ('C:/wamp64/www/APP-INFO/Vue/header.php');
include ('C:/wamp64/www/APP-INFO/Vue/' . $vue . '.php');
include ('C:/wamp64/www/APP-INFO/Vue/footer.php');
