<?php

session_start();
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=basedonnee;charset=utf8', 'root', '');
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}


$email= $_POST['email'
    
];
    $password =$_POST['passWord'];
    $lastname=$_POST['nom'];
    $name=$_POST['prénom'];
    $birthdate=$_POST['birthdate'];
    $adress=$_POST['adresse'];
    $postalcode=$_POST['codepoastal'];
    $phone=$_POST['numTel'];
    

$donnees= $bdd->prepare('INSERT INTO users(email, password, nom, prenom, birthdate, adress, codepostal, phone) VALUES (:email, :password, :nom, :name, :prenom, :adress, :codepostal, :phone)');
/*
$donnees->bindParam(":email", $user['email']);
$donnees->bindParam(":password", $user['password']);
$donnees->bindParam(":lastname", $user['lastname']);
$donnees->bindParam(":name", $user['name']);
$donnees->bindParam(":birthdate", $user['birthdate']);
$donnees->bindParam(":adress", $user['adress']);
$donnees->bindParam(":postalcode", $user['postalcode']);
$donnees->bindParam(":phonenumber", $user['phonenumber']);
*/
$donnees->execute(array(
    'email'=> $email,
    'password' => $passWord,
    'lastname'=>$lastname,
    'name'=>$name,
    'birthdate'=>$birthdate,
    'adress'=>$adress,
    'postalcode'=>$postalcode,
    'phone'=>$phone));