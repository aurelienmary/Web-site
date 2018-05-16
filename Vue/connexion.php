<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Page d'accueil</title>

        <link href="../public/css/connexion.css" rel="stylesheet">
         <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 

        <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet"> 
        
    </head>
    
    
    <body>
        <?php include("header.php"); ?>
        
		<section>
		<div id=box>
           
        	<div class=box2>
        		<h1>Me connecter</h1>  
	        	<h2>J'ai déjà un compte</h2>
	           	<form action =test.php method="post" >
	           	
	            	<label for="identifiant" class="mat-label">Votre identifiant</label>
	                <input type="text" id="identifiant" name="identifiant" class="mat-input">
	                <br />
	           
	          
	          
	                <label for="password" class="mat-label">Mot de passe</label>
	                <br />
	                <input type="password" id="password" name="password" class="mat-input">
	                <input type=submit name=valider>
	                
	           
	           </form>
           </div>
        
           
          <div class=box3> 
          	<h2>Je n'ai pas encore de compte</h2><br />
           	<p><a href="inscription.php" class="create-account">Cliquer ici pour créer votre compte</a></p>
          </div>
        
         
     	</div>

     </section>  


        <?php include 'footer.php';?>
        
        
        
        
    </body>
</html>
