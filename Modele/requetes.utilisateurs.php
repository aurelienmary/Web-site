<?php


require('requetes.generiques.php');


$table='users';


/*
 ajoute un nouvel utilisateur dans la base de donn�es
 .
 */
function adduser(PDO $bdd, array $user)
{
    $query= 'INSERT INTO users(email, password, lastname, name, birthdate, phonenumber, adress, postalcode) VALUES (:email, :password, :lastname, :name, :birthdate, :phonenumber, :adress, :postalcode)';
    $donnees= $bdd->prepare($query);
    $donnees->bindParam(":email", $user['email']);
    $donnees->bindParam(":password", $user['password']);
    $donnees->bindParam(":lastname", $user['lastname']);
    $donnees->bindParam(":name", $user['name']);
    $donnees->bindParam(":birthdate", $user['birthdate']);
    $donnees->bindParam(":phonenumber", $user['phonenumber']);
    $donnees->bindParam(":adress", $user['adress']);
    $donnees->bindParam(":postalcode", $user['postalcode']); 
    return $donnees->execute();
}

/*
 * fonction pour v�rifi� si l'utilisateur existe dans la base de donn�es
 */
function login(PDO $bdd, array $user) 

{
   
    $req = $bdd->prepare('SELECT id, name, lastname FROM users WHERE email= :email AND password= :password');
    $req->execute(array('email'=> $user['email'], 'password'=> $user['password'] ));
    
    return $donnees = $req->fetch();
   
    
}

/*
 * r�cup�re les information de l'utilisateur dans la base de donn�es
 */
function searchuser(PDO $bdd,array $user)
{
	
    
}

function chat(PDO $bdd, array $echange)
{
	$req= $bdd->prepare( 'INSERT INTO chat(pseudo, message, date_message) VALUES (:pseudo, :message, NOW())');
	$req->execute(array(
			"pseudo" =>$echange['pseudo'],
			"message" => $echange['message'],
			
	));
	//$bdd->exec('INSERT INTO chat (date-message) VALUES ( NOW() )');
	
}