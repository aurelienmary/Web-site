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

