
<?php

session_start();
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=basedonnee;charset=utf8', 'root', '');
	array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
}
    catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}


	$midentconnect=($_POST['identifiant']);
	$mdpconnect=($_POST['password']);
	
	
	if(!empty($midentconnect) AND !empty($mdpconnect))
	{
		$requete = $bdd->prepare('SELECT * FROM users WHERE email=? AND password=?');
		
		$requete->execute(array($midentconnect, $mdpconnect));
		$userexist= $requete->rowCount ();
		if ($userexist==1)
		{
	        
			include('ajoutcapteur.php');
		}
		
	   
	     else 
	    {
			echo 'erreur de mdp ou pseudo ';
	     }
       }
      else
      {
		echo 'remplissez tous les champs';
      }

         ?>