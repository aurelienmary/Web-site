<?php
include ('./Modele/requetes.home.php');

if (!isset($_GET ['fonction']) || empty($_GET['fonction']))
{
    $function ="accueil";
}
else
{
    $function=$_GET['fonction'];
}

switch ($function)
{
    case "accueil":
        $vue="";
        $title="Gestion maison";
        $home = getuserhome($bdd,$_SESSION['id']);
}