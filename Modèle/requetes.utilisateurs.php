<?php

include ('requetes.generiques.php');

$table='Users';


/*
 ajoute un nouvel utilisateur dans la base de données
 .
 */
function adduser(PDO $bdd, array $utilisateur)
{
    $query= 'INSERT INTO Users(email, password, lastname, name, birthdate, phonenumber, adress, postalcode, admin) VALUES (:email, :password, :lastname, :name, :birthdate, :phonenumber, :adress, :postalcode, :admin)';
    $donnees= $bdd->prepare($query);
    $donnees->bindParam(":username", $utilisateur['username']);
    $donnees->bindParam(":password", $utilisateur['password']);
    $donnees->bindParam(":lastname", $utilisateur['lastname']);
    $donnees->bindParam(":name", $utilisateur['name']);
    $donnees->bindParam(":birthdate", $utilisateur['birthdate']);
    $donnees->bindParam(":phonenumber", $utilisateur['phonenumber']);
    $donnees->bindParam(":adress", $utilisateur['adress']);
    $donnees->bindParam(":postalcode", $utilisateur['postalcode']);
    $donnees->bindParam(":admin", $utilisateur['admin']);
    return $donnees->execute();
}

/*
 * fonction pour vérifié si l'utilisateur existe dans la base de données
 */
function login(PDO $bdd, array $user) :bool

{
    
}

/*
 * récupère les information de l'utilisateur dans la base de données
 */
function searchuser(PDO $bdd,array $user)
{
    
}