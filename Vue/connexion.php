<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Page d'accueil</title>
        <link href="styles1.css" rel="stylesheet">
         <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet"> 
        
    </head>
    
    
    <body>
        
        <header>
		     <div class="header-box">
		     	<div class="logo">
		            <img id="img" src="images/notre-logo.png" alt="notre logo" />
		        </div>
		        	<div class="search-bar"> 
		            	<div class="search-bar">
		              
		              <h1>DOMISEP</h1>
		         
		         
		        		</div>
		        	</div>
		        <div class="reglog">
		             <p><img src="images/man-user.png" alt='avatar'/><a href="#"> Connexion </a></p>
		        </div>
		     </div>
		     
		     <div class="wrapper-bis"> 
		         
		                <nav>
		                    <ul>
		                        <li><a href="index.html">Accueil</a></li>
		                        <li><a href="#">A propos</a></li>
		                        <li><a href="Guides">Produits</a></li>
		                        <li><a href="Contact">Contact</a></li>
		                    </ul>
		                
		                </nav>            
		     </div>           
            
     </header>
     
     <section> 
    
         
     	<div id="box">
           
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
          	<h2>Je n'ai pas encore de compte</h2>
           	<p><a href="index2.html" class="create-account">Cliquer ici pour créer votre compte</a></p>
          </div>
        
         
     	</div>

     </section>  


        <footer> 
            
            <div class="footer-box">
                <div class="resauxSociaux">
                    <h3>Suivez-nous: </h3>
                     <a href="#"><img src='images/facebook-logo.png'/></a> 
                     <a href="#"><img src='images/instagram.png'/></a>
                     <a href="#"><img src='images/twitter.png'/></a>
                     <p>28, rue Notre-Dame-des-Champs<br>75006 Paris</p>
                     
                </div>
                <div class="renseignements"> 
                    <img src='images/question.png' alt='img-question' />
                    <h3>AIDE & CONTACT</h3>
                    <p>Une question? Un renseignement? <br> 
                    <p>Contacter-nous</p>
                    <div class="ml">
                    	<p><a href="#">Mentions légales</a></p>
                	</div>
                </div>
                <div class="catalogues">  
                    <h3 class="gc"> <a href="index4"> Les catalogues & Guides </a></h3>
                    <p>Retrouver tous les catalogues et <br> guides pour réaliser tous vos projets</p>
                </div>
               
            </div>
            
            
            
             
           
           
        </footer>
        
        
        
        
        
    </body>
</html>
