<?php
include ('requetes.generiques.php');
$table='home';
$table2='piece';

function getuserhome (PDO $bdd, string $id)
{
    $query= "SELECT * FROM home WHERE owner_id = :id LEFT JOIN piece ON home.id=piece.home_id";
    $data=$bdd->prepare($query);
    $data -> bindParam(":id", $id);
    $data->execute();
    return $data->fetchAll();
}


function addhome(PDO $bdd, array $home)
{
	$i=0;
	$query= 'INSERT INTO home(name,valeur,sensortype,function_id, piece_id, users_id,catalog_id) VALUES (:name,:valeur,:sensortype,:function_id, :piece_id, :users_id, :catalog_id)';
	$donnees= $bdd->prepare($query);
	$donnees->bindParam(":name", $sensor['name']);
	$donnees->bindParam(":valeur", $i);
	$donnees->bindParam(":sensortype", $sensor['sensortype']);
	$donnees->bindParam(":function_id", $i);
	$donnees->bindParam(":piece_id", $sensor['piece']);
	$donnees->bindParam(":users_id", $_SESSION['id']);
	$donnees->bindParam(":catalog_id", $i);
	return $donnees->execute();
}

