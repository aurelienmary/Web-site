<?php
include ('Modèle/requetes.admin.php.');

if (!isset($_GET ['fonction']) || empty($_GET['fonction']))
{
    $function ="acceuiladmin";
}
else
{
    $function=$_GET['function'];
}

switch ($function)
{
    case "acceuiladmin":
        
}