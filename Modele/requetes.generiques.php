<?php


include ("connexion.php");


function getall (PDO $bdd, string $table)
{
    $query = 'SELECT * FROM'.$table;
    return $bdd->query($query)->fetchAll();
}

function searchfrom (PDO $bdd, string $table, string $line)
{
    $query = 'SELECT '.$line.' FROM'.$table;
    return $bdd->query($query)->fetchAll();
}