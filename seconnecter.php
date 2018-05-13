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
$email=($_POST['email']);


if(!empty($midentconnect) AND !empty($email))
{
	$requete = $bdd->prepare('SELECT * FROM utilisateurs WHERE pseudo=? AND mdp=?');
	
	$requete->execute(array($midentconnect, $email));
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
