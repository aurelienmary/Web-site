<?php


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
        $vue="addSensor";
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


include ('./Vue/header.php');
include ('./Vue/' . $vue . '.php');
include ('./Vue/footer.php');
