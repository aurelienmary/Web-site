<?php

include ('Modèle/requetes.building.php');


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