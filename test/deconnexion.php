<?php
session_start();
$_SESSION=array();
session_destroy;
include ('formulaireconnexion.php');
echo "deconnecté "; // met fin à la session de l'utilisateur 
?>