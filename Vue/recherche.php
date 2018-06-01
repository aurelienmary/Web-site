<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Admin: recherche</title>
        <link href="./public/css/recherche.css" rel="stylesheet">
         <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet"> 
        
    </head>
    
    
    <body>
    
    <div class="recherche_p">
    <form method="POST" id='searchthis' action="index.php?cible=admin&fonction=recherche">
    	
 		<input type="search" placeholder="search"  name="recherche" id = "search"  required="required" data-error="message is required." autofocus></input>
 		<input type="submit" id="search-btn" value="rechercher" />
    
    </form>
    </div>
    
    <div class="classification" >
    	<div class="rangement">
    	<div>
    		Nom
    	
    	</div>
    	
    	<div>
    		Prenom
    	
    	</div>
    	
    	<div>
    		Mail
    	
    	</div>
    	</div>
    
    
    
    
    
    <?php 
    if (isset($_POST['recherche']))
    {
    	$req = $bdd->prepare('SELECT name, lastname, email FROM users WHERE email= :email OR name= :name OR lastname= :lastname');
    	$req->execute(array('email'=> $_POST['recherche'],'name'=> $_POST['recherche'], 'lastname'=> $_POST['recherche'] ));
		
		while ($donnees = $req->fetch())
		{
		?> <div class="utilisateur"> <?php 
			
			echo ' <div> ' . $donnees['name']. '</div> <div>' . htmlspecialchars($donnees['lastname']) . '</div> <div> ' . htmlspecialchars($donnees['email']) . '  <a href="#"><img src="public/images/crayon.png" /></a></div>';
		?> 
		</div>
		<?php }
		
    }
?>


</div>
