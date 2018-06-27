<?php

include ("./Modele/requete.building.php");



if (!isset($_GET ['fonction']) || empty($_GET['fonction']))
{
    $function ="building";
}
else
{
    $function=$_GET['fonction'];
}

switch ($function)
{
    case "piece":
    	$vue="ajouterPiece";
    	$title= "Les pieces";
    	
    	/*$liste = getusersensor($bdd, $_SESSION['id']);
    	print_r($liste);
    	if (empty($liste))
    	{
    		$alerte="Aucun capteur n'est enregistré pour le moment";
    	}*/
    	break;
    	
    case "ajout":
    	$vue="insertPiece";
    	$title= "Les pieces";
    	$alerte=false;
    	
    	if (isset($_POST['name']) and isset($_POST['type'])  and isset($_POST['superficie']))
    	{
    		
    		$piece =[
    				'name'=> $_POST['name'],
    				'sensortype'=>$_POST['type'],
    				
    				'superficie'=> $_POST['superficie'],
    				
    				
    				
    		];
    		print_r($sensor);
    		addsensor($bdd,$sensor);
    		
    	}
    	
    	break;
    	
        
}


include ('./Vue/header.php');
include ('./Vue/' . $vue . '.php');
include ('./Vue/footer.php');