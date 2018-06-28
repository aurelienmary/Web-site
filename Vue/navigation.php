<!DOCTYPE html>
<<<<<<< HEAD
<html lang="fr">
    <head>
        <meta charset="utf-8">
        
         
        <link href="./public/css/navigation.css" rel="stylesheet">
        
        
    </head>
    
    
    <body>
	
	<div class="dashboard">
	
		  <h1>Tableau de bord</h1>
		        
		   <nav>
    <ul>
       <li>
		 <a href="index.php?cible=utilisateurs&fonction=ajoutcapteur" data-title="Projects">Menu</a>
	  </li>
      <li></br>
        <a href="index.php?cible=utilisateurs&fonction=addSensor" data-title="Projects">Gestion capteurs</a>
      </li>
      </br>
      <li>
		<a href="index.php?cible=utilisateurs&fonction=chat" data-title="message">Messagerie</a>
	</li>
	</br>
      <li>
        <a href="index.php?cible=building&fonction=piece" data-title="Timeline">Gestion des pièces</a>
      </li>
      </br>
     <li>
		<a href="index.php?cible=utilisateurs&fonction=profil" data-title="Settings">Profil</a>
	 </li>
	 </br>
	    <li>
		<a href="index.php?cible=utilisateurs&fonction=stat" data-title="Statistique">Statistiques</a>
	 </li>
     
	
		   
		    
		  
		            
 <?php if ($_SESSION['admin'] == 1)
=======
	<html lang="fr">
	    <head>
	        <meta charset="utf-8">
	        
	         
	        <link href="./public/css/navigaton.css" rel="stylesheet">
	         <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 
	        <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet"> 
	        
	    </head>
	    
	    
	    <body>






			<span class="bckg"></span>
			<div class="dashboard">
			  <h1>Tableau de bord</h1>
			        
			   <nav>
	    <ul>
	       <li>
			 <a href="index.php?cible=utilisateurs&fonction=ajoutcapteur" data-title="Projects">Menu</a>
		  </li>
	      <li>
	        <a href="index.php?cible=utilisateurs&fonction=addSensor" data-title="Projects">Gestion capteurs</a>
	      </li>
	      
	      <li>
			<a href="index.php?cible=utilisateurs&fonction=chat" data-title="message">Messagerie</a>
		</li>
	      <li>
	        <a href="index.php?cible=building&fonction=piece" data-title="Timeline">Gestion des pièces</a>
	      </li>
	     <li>
			<a href="index.php?cible=utilisateurs&fonction=profil" data-title="Settings">Profil</a>
		 </li>
		    <li>
			<a href="index.php?cible=utilisateurs&fonction=stat" data-title="Statistique">Statistiques</a>
		 </li>
	     
	      <li>
	        <a href="javascript:void(0);" data-title="Settings">Reglages</a>
	      </li>
	      <li>
	        <a href="javascript:void(0);" data-title="alert">Notifications</a>
	      </li>
		 <?php 
			      if ($_SESSION['admin'] == 1)
>>>>>>> f7db87f6b12f4de8d135b836d49b5490cf21ecb0
			      {
			      	?>
			      	<li>
			      	<a href="index.php?cible=admin&fonction=recherche" data-title="alert">Recherche</a>
			      	</li>
			      <?php }
			      ?>
			    </ul>
			  </nav>
			            </div>
	</body>


	</html>
* 		 
