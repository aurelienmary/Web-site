<?php


include ("./Modele/requetes.capteurs.php");



if (!isset($_GET['fonction']) || empty([$_GET['fonction']]))
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
        $lol = getlog($bdd);
        
        $liste = getusersensor($bdd, $_SESSION['id']);
        print_r($liste);
        if (empty($liste))
        {
            $alerte="Aucun capteur n'est enregistré pour le moment";
        }
        break;
        
        
    case 'ajout':
        $vue="insert";
        $title="Ajouter un capteur";
        $alerte=false;
        if (isset($_POST['name']) and isset($_POST['type'])  and isset($_POST['piece']))
            {
                
            	$sensor =[
                        'name'=> $_POST['name'],
            	        'sensortype'=>$_POST['type'],
                        
                        'piece'=> $_POST['piece'],
            	
                        ];
                
            	
                addsensor($bdd,$sensor);
                
            }
           
        
        break;
        
    case 'supprimer':
    	$vue="addSensor";
    	$title= "Les capteurs";
    	
    	deletesensor($bdd, $_POST['supr']);
    	break;
        
    
}


include ('./Vue/header.php');
include ('./Vue/' . $vue . '.php');
include ('./Vue/footer.php');
