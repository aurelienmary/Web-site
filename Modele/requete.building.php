<?php


include ('./Modele/requetes.generiques.php');


$table='building';

function getuserpiece(PDO $bdd, $id)
{
	$query= "SELECT * FROM piece WHERE users_id = :id ";
	$data=$bdd->prepare($query);
	$data -> bindParam(":id", $id);
	$data->execute();
	return $data->fetchAll();
}



function addpiece(PDO $bdd, array $piece)
{
	$i=1;
	$query= 'INSERT INTO piece(name, home_id, superficie, users_id) VALUES (:name, :home_id, :superficie, :users_id)';
	$donnees= $bdd->prepare($query);
	$donnees->bindParam(":name", $piece['name']);
	$donnees->bindParam(":home_id", $i);
	$donnees->bindParam(":superficie", $piece['superficie']);
	$donnees->bindParam(":users_id", $_SESSION['id']);
	return $donnees->execute();
}

function deletepiece(PDO $bdd, $id_piece)
{
	$req = $bdd->prepare('DELETE from piece WHERE id= :id_piece');
	$req->execute(array('id_piece'=> $id_piece));
}