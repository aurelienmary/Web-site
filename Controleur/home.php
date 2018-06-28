<?php
include ("./Modele/requetes.home.php");



if (!isset($_GET ['fonction']) || empty($_GET['fonction']))
{
	$function ="home";
}
else
{
	$function=$_GET['fonction'];
}

switch ($function)
{
	case 'maison':
		$vue="addSensor";
		$title= "Les capteurs";
		
		$liste = getusersensor($bdd, $_SESSION['id']);
		print_r($liste);
		if (empty($liste))
		{
			$alerte="Aucun capteur n'est enregistré pour le moment";
		}
		break;