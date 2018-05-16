<?php

session_start();
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', 'root');
	array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}
$midentconnect=($_POST['pseudo']);
$mdp=($_POST['mdp']);


if(!empty($midentconnect) AND !empty($mdp))
{
	$requete = $bdd->prepare('SELECT * FROM utilisateurs WHERE pseudo=? AND mdp=?');
	
	$requete->execute(array($midentconnect, $mdp));
	$userexist= $requete->rowCount ();
	if ($userexist==1)
	{
		
		include('tableaudebord.php');
	}
	
	
	else
	{
		echo 'erreur de mdp ou pseudo ';
	}
}
else
{
	echo 'remplissez tous les champs';
}
?>
