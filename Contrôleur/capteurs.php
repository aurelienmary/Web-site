<?php

include ('./Modèle/requetes.capteurs.php');


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
        
        $liste = getusersensor($bdd, $user);
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

include ('vues/header.php');
include ('vues/' . $vue . '.php');
include ('vues/footer.php');