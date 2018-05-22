<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="../public/css/header.css" rel="stylesheet">
        <link href="./public/css/header.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet"> 
        
    </head>
    
    

   		<header>
		     <div class="header-box">
		     	<div class="logo">
		            <a href='index.php?cible=utilisateurs&fonction=accueil'><img id="img"  src="public/images/notre-logo.png" alt="notre logo" /></a>
		        </div>
		        	<div class="search-bar"> 
		            	<h1>DOMISEP</h1>
            			
         			</div>
		             
		         
		         <?php 
			    	if (!empty($_SESSION['id']) && $_COOKIE['d'] != 1)
			    	{
			    		?>
			    		<div class="reglog">
			    		
			    		
			    		
			    		<p><img src="public/images/man-user.png" alt='avatar'/><a href="index.php?cible=utilisateurs&fonction=deconnexion"> Deconnexion </a></p>
			    		
			    		</div>
    		
    	
			    <?php }
			    	else {
			    	
			    ?>
		        		
		        
		        <div class="reglog">

		    

		             <p><img src="public/images/man-user.png" alt='avatar'/><a href="index.php?cible=utilisateurs&fonction=connexion"> Connexion </a></p>

		        </div>
		        
		        <?php } ?>
		     </div>
		     
		     <div class="wrapper-bis"> 
		         
		                <nav>
		                    <ul>
		                        <li><a href="index.php?cible=utilisateurs&fonction=accueil">Accueil</a></li>
		                        <li><a href="#">A propos</a></li>
		                        <li><a href="index.php?cible=utilisateurs&fonction=catalogue">Produits</a></li>
		                        <li><a href="Contact">Contact</a></li>
		                    </ul>
		                
		                </nav>            
		     </div>           
		</header>
     

</html>
