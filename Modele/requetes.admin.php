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

function edition(PDO $bdd, $edit)
{
	$req= $bdd->prepare( 'UPDATE users SET name = :name, lastname = :lastname, email = :email, adress = :adress WHERE id = :id');
	$req->execute(array(
			"name" =>$edit['name'],
			"lastname" => $edit['lastname'],
			"email"=> $edit['email'],
			"adress"=>$edit['adress'],
			"id"=>$edit['id'],
			
	));
}