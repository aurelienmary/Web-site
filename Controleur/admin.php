<?php
session_start();
include ('C:/wamp64/www/APP-INFO/Modele/requetes.admin.php.');

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