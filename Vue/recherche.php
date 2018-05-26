<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Admin: recherche</title>
        <link href="./public/css/chat.css" rel="stylesheet">
         <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet"> 
        
    </head>
    
    
    <body>
    
    
    <form method="POST" id='recherche' action="index.php?cible=admin&fonction=recherche">
    	<label for="recherche">Votre message:</label> 
 		<input type="search" placeholder="search"  name="recherche" id = "recherche" class="mat-input" required="required" data-error="message is required." autofocus></input>
 		<input type="submit" value="rechercher" />
    	
    
    
    
    </form>
    
    <?php 
    	$req = $bdd->prepare('SELECT name, lastname FROM users WHERE email= :email OR name= :name OR lastname= :lastname');
    	$req->execute(array('email'=> $_POST['recherche'], 'email'=> $_POST['recherche'] ,'name'=> $_POST['recherche'], 'lastname'=> $_POST['recherche'] ));
		
		while ($donnees = $req->fetch())
		{
			
			echo ' <p> ' . $donnees['name']. ':<strong> ' . htmlspecialchars($donnees['lastname']) . '</strong> : ' . htmlspecialchars($donnees['email']) . '</center></p>';
		}