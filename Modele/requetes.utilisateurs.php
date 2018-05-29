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
    $query= 'SELECT id FROM users WHERE email= :email AND password= :password';
    $data = $bdd->prepare($query);
    $data -> bindParam (":email",$user['email'],PDO::PARAM_STR);
    $data -> bindParam (":password",$user['password']);
    $data->execute();
    return $data->fetchAll();
    
    
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