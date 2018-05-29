<?php


include ('./Modele/requetes.admin.php');


if (!isset($_GET ['fonction']) || empty($_GET['fonction']))
{
    $function ="acceuiladmin";
}
else
{
    $function=$_GET['fonction'];
}

switch ($function)
{
    case "recherche":
    	$vue="recherche";
    	$title="recherche";
    	/*if (isset($_POST['recherche']))
    	{
    		$recherche=search($bdd, $mot);
    		
    	}*/
    	
    	
    	break;
    	
        
}


include ('./Vue/header.php');
if (!empty($_SESSION['id']) && $_SESSION['d'] != 1 && $vue != "catalogue")
{
	include ('./Vue/navigation.php');
}

include ('./Vue/'. $vue .'.php');
include ('./Vue/footer.php');