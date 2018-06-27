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
                    if (isset($_POST['name']) and isset($_POST['description']) and isset($_POST['logement']) and isset($_POST['piece']))
            {
                
            	$sensor =[
                        'name'=> $_POST['name'],
            	        'description'=>$_POST['description'],
                        'logement' => $_POST['logement'],
                        'piece'=> $_POST['piece'],
                        
                    
                        ];
                
                addsensor($bdd,$sensor);
                
            }
            $title="Inscription";
        
        break;
        
        
        
    
}


include ('./Vue/header.php');
include ('./Vue/' . $vue . '.php');
include ('./Vue/footer.php');
