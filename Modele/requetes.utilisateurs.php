<?php

include ('requetes.generiques.php');

$table='Users';


/*
 ajoute un nouvel utilisateur dans la base de donn�es
 .
 */
function adduser(PDO $bdd, array $user)
{
    $query= 'INSERT INTO Users(email, password, lastname, name, birthdate, phonenumber, adress, postalcode, admin) VALUES (:email, :password, :lastname, :name, :birthdate, :phonenumber, :adress, :postalcode, :admin)';
    $donnees= $bdd->prepare($query);
    $donnees->bindParam(":username", $user['username']);
    $donnees->bindParam(":password", $user['password']);
    $donnees->bindParam(":lastname", $user['lastname']);
    $donnees->bindParam(":name", $user['name']);
    $donnees->bindParam(":birthdate", $user['birthdate']);
    $donnees->bindParam(":phonenumber", $user['phonenumber']);
    $donnees->bindParam(":adress", $user['adress']);
    $donnees->bindParam(":postalcode", $user['postalcode']);
    $donnees->bindParam(":admin", $user['admin']);
    return $donnees->execute();
}

/*
 * fonction pour v�rifi� si l'utilisateur existe dans la base de donn�es
 */
function login(PDO $bdd, array $user) :array

{
    $query= 'SELECT id FROM Users WHERE email= :email AND password= :password';
    $query -> bindParam (":email",$user['email']);
    $query -> bindParam (":password",$user['password']);
    $query->execute();
    return  $query->fetchall();
    
}

/*
 * r�cup�re les information de l'utilisateur dans la base de donn�es
 */
function searchuser(PDO $bdd,array $user)
{
    
}