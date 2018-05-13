<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=basedonnee;charset=utf8', 'root', 'root');
	array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}

$pseudo= htmlspecialchar($_POST['pseudo']);
$email=htmlspecialchar($_POST['email']);
$age=htmlspecialchar($_POST['age']);
$mdp=sha1($_POST['mdp']);


$donnees= $bdd->prepare('INSERT INTO users (pseudo, mdp, age, nom) VALUES (?, ?, ?, ? )');

$donnees->execute(array(
		 $pseudo,
		 $email,
		$age,
		$mdp
		));

include('tableaudebord.php');
?>