<?php

include ("Modele/connexion.php");

function getall (PDO $bdd, string $table)
{
    $query = 'SELECT * FROM'.$table;
    return $bdd->query($query)->fetchAll();
}