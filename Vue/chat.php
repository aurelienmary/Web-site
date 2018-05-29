<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Page d'accueil</title>
        <link href="./public/css/chat.css" rel="stylesheet">
         <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet"> 
        
    </head>
    
    
    <body>
    
   
 		
 		<form method="POST" id='chat' action="index.php?cible=utilisateurs&fonction=chat">
 			<label for="pseudo">Votre pseudo:</label> 
 			<input type="text" name="pseudo" id = "pseudo" class="mat-input" required="required" value="aurelien" data-error="pseudo is required."></br>
 			
 			<label for="message">Votre message:</label> 
 			<textarea  name="message" id = "message" class="mat-input" required="required" data-error="message is required."></textarea>
 			<input type="submit" value="Envoyer" />
 		
 		</form>
 		
 		<?php // Récupération des 10 derniers messages
			$reponse = $bdd->query('SELECT pseudo, message, DATE_FORMAT(date_message, \'%d/%m/%Y à %Hh%imin%ss\') AS date_fr FROM chat ORDER BY date_message ');
			?> <div class="conversation">
			
			<?php while ($donnees = $reponse->fetch())
			{
				
				echo ' <p> Le ' . $donnees['date_fr']. ':<strong> ' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</center></p>';
			}
			?>
			</div>

		
 		
 	
 	
 	
 	
 	</body>
 	</html>