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
    //include ('./Modele/requetes.capteurs.php');
    
    if (isset($_POST['recherche']))
    {
    	$req = $bdd->prepare('SELECT name, lastname, email, adress, id FROM users WHERE email= :email OR name= :name OR lastname= :lastname');
    	$req->execute(array('email'=> $_POST['recherche'],'name'=> $_POST['recherche'], 'lastname'=> $_POST['recherche'] ));
		
		while ($donnees = $req->fetch())
		{
		?> <div class="utilisateur"> <?php 
			
			echo ' <div> ' . $donnees['name']. '</div> <div>' . htmlspecialchars($donnees['lastname']) . '</div> <div> ' . htmlspecialchars($donnees['email']) . ' </div>';
		?> 
		<form action ='index.php?cible=admin&fonction=edition' method="post" >
		<input type="hidden" name="name" value="<?php echo $donnees['name'] ?>" />
		<input type="hidden" name="lastname" value="<?php echo $donnees['lastname'] ?>" />
		<input type="hidden" name="email" value="<?php echo $donnees['email'] ?>" />
		<input type="hidden" name="adress" value="<?php echo $donnees['adress'] ?>" />
		<input type="hidden" name="id" value="<?php echo $donnees['id'] ?>" />
		<input type="image" name="profil" src="public/images/crayon.png"  required />
		</form>
		</div>
		<?php }
		
    }

    
    ?>


</div>

<div>
<?php  
$lol = getlog($bdd);
	echo $lol;
	
?>
</div>
