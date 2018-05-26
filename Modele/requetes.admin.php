<?php
//session_start();

//require('requetes.generiques.php');
include('requetes.utilisateurs.php');


$table='users';

function search(PDO $bdd, $mot)
{
	$req = $bdd->prepare('SELECT name, lastname FROM users WHERE email= :email OR password= :password OR name= :name OR lastname= :lastname');
	$req->execute(array('email'=> $mot, 'password'=> $mot, 'email'=> $mot, 'name'=> $mot, 'lastname'=> $mot ));
	
	return $donnees = $req->fetch();
}