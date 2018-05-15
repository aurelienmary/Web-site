<?php
session_start();
include ("C:/wamp64/www/APP-INFO/Modele/requetes.building.php");


if (!isset($_GET ['fonction']) || empty($_GET['fonction']))
{
    $function ="building";
}
else
{
    $function=$_GET['function'];
}

switch ($function)
{
    case "building":
        
}