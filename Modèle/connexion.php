<?php

try{
<<<<<<< HEAD
    $bdd = new PDO('mysql:host=localhost;dbname=BaseDonnée;charset=utf8', 'root', '');
=======
    $bdd = new PDO('mysql:host=localhost;dbname=BaseDonnÃ©e;charset=utf8', 'root', '');
>>>>>>> e95221836424737d164622ff663f195f8a77b93e
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
<<<<<<< HEAD
}
=======
}
>>>>>>> e95221836424737d164622ff663f195f8a77b93e
