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
    	
    	$liste = getuserpiece($bdd, $_SESSION['id']);
    	print_r($liste);
    	if (empty($liste))
    	{
    		$alerte="Aucune piece n'est enregistré pour le moment";
    	}
    	break;
    	
    case "ajout":
    	$vue="insertPiece";
    	$title= "Les pieces";
    	$alerte=false;
    	
    	if (isset($_POST['name']) and isset($_POST['type'])  and isset($_POST['superficie']))
    	{
    		$name =  $_POST['name'] .' '. $_POST['type'];
    		$piece =[
    				'name'=> $name,
    				'piecetype'=>$_POST['type'],
    				
    				'superficie'=> $_POST['superficie'],
    				
    		];
    		
    		print_r($piece);
    		addpiece($bdd, $piece);
    		
    	}
    	
    	break;
    	
    	
    case 'supprimer':
    	$vue="ajouterPiece";
    	$title= "Les pieces";
    	
    	deletepiece($bdd, $_POST['supr']);
    	break;
    	
        
}


include ('./Vue/header.php');
include ('./Vue/' . $vue . '.php');
include ('./Vue/footer.php');