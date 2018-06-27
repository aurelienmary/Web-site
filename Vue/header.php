<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="../public/css/header.css" rel="stylesheet">
        <link href="./public/css/header.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet"> 
        <script type="text/javascript" language="javascript" src="header.js"></script>
        
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
			    	if (!empty($_SESSION['id']) && $_SESSION['d'] != 1)
			    	{
			    		?>
			    		<div class="reglog">
			    		
			    		
			    		
			    		<p><img src="public/images/man-user.png" alt='avatar'/><a href="index.php?cible=utilisateurs&fonction=deconnexion"> Deconnexion </a></p>
			    		<p> Bienvenue <?php echo $_SESSION['name'] . '  ' . $_SESSION['lastname']?> </p>
			    		
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
		                        <li><a href="index.php?cible=utilisateurs&fonction=apropos">A propos</a></li>
		                        <li><a href="index.php?cible=utilisateurs&fonction=catalogue">Produits</a></li>
		                        <li><a href="index.php?cible=utilisateurs&fonction=contact">Contact</a></li>
					 <li><a href="index.php?cible=utilisateurs&fonction=faq">FAQ</a></li>
		                    </ul>
		                
		                </nav>            
		     </div>           
		</header>
     

</html>
