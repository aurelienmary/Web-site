
<?php
session_start();

function login(PDO $bdd, array $user) :array

{
    $query= 'SELECT id FROM Users WHERE email= :email AND password= :password';
    $query -> bindParam (":email",$user['email']);
    $query -> bindParam (":password",$user['password']);
    $query->execute();
    return  $query->fetchall();
    
}

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
	$mdpconnect=($_POST['passWord']);
	
	if(!empty($midentconnect) AND !empty($mdpconnect))
	{
	    $value=[
	        'email'=> $midentconnect,
	        'password' => $password];
	    $id=login($bdd, $user);
		
		if (!empty($id))
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