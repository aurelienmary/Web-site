<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', 'root');
	array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}
if (!empty($_POST['pseudo']) AND !empty($_POST['nom'])  AND !empty($_POST['age']) AND !empty($_POST['mdp']))
{
	//*fonction de vérification des éléments en java //
$pseudo=($_POST['pseudo']);
$nom=($_POST['nom']);
$age=($_POST['age']);
$mdp=sha1($_POST['mdp']);

$donnees= $bdd->prepare('INSERT INTO utilisateurs (pseudo, mdp, age, nom) VALUES (?, ?, ?, ? )');

$donnees->execute(array($pseudo,$mdp,$age,$nom));

include('tableaudebord.php');
}
else
{
echo " Remplissez tous les champs svp !" ; 
include ('formulaireinscription.php') ; 
}
?>