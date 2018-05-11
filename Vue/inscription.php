<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Page d'accueil</title>
        <link href="styles2.css" rel="stylesheet">
        <script type="text/javascript" language="javascript" src="script2.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 
        
       
        
        
        
    </head>
    
    
    <body>
        
 <header>
     <div class="header-box">
         <div class="logo">
            <img id="img" src="images/notre-logo.png" alt="notre logo" />
        </div>
             <div class="search-bar">
              
              <h2>DOMISEP</h2>
         
         
         </div>
         <div class="reglog">
             <p><img src="images/man-user.png" alt='avatar'/><a href="connexion.php"> Connexion </a></p>
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
        <h1>Inscription</h1>
     <div class="login-box">
         
       <div class="box">
           
           
           
            
 <form id="contact-form" action="" method="POST" role="form">
               
               
        <div class="messages"></div>

        <div class="controls">
               
               
            <div class="mat-div">
                <label for="fullname" class="mat-label">Nom</label>
                <input type="text" name="nom" class="mat-input" required="required" data-error="Firstname is required.">
           
           </div>
            
            
            
               
     
     
     <div class="mat-div">
                <label for="fullname" class="mat-label">Prénom</label>
                <input type="text" name="prénom" class="mat-input" required="required" data-error="Firstname is required." >
           
           </div>
           
           <div class="mat-div">
                <label for="email" class="mat-label">E-mail</label>
                <input type="email" name="email" class="mat-input" required="required" data-error="Valid email is required.">
           
           </div>
           
           <div class="mat-div">
                <label for="fullname" class="mat-label">Mot de passe</label>
                <input type="password" name="passWord" class="mat-input" required="required" data-error="password is required" >
           
           </div>
               
               <div class="mat-div">
                <label for="fullname" class="mat-label">Date de naissance</label>
                <input type="text" name="birthdate" class="mat-input" >
           
           </div>
               
               <div class="mat-div">
                <label for="fullname" class="mat-label">numéro de téléphone</label>
                <input type="tel" name="numTel" class="mat-input" required="required" data-error="Valid tel is required">
           
           </div>
        
           
           <div class="mat-div">
                <label for="fullname" class="mat-label">Adresse</label>
                <input type="text" name="identifiant" class="mat-input">
           
           </div>
           
           <div class="mat-div">
                <label for="fullname" class="mat-label">Code postale</label>
                <input type="text" name="identifiant" class="mat-input">
           
           </div>
               
           
           <div class="mat-div">
                <label for="fullname" class="">J'ai lu et j'accepte <a href="#">les conditions d'utilisation</a></label>
                <input type="checkbox" name="identifiant" class="mat-input">
           
           </div>
     
     <div class="col-md-12">
              <input type="submit" class="btn-send" value="Valider">
            </div>
                    </div>
           
     
     
     
     
               </form>
          
          
         </div>
        
     </div>

      


        <footer> 
            
            <div class="footer-box">
                <div class="resauxSociaux">
                    <h3>Suivez-nous: </h3>
                     <a href="#"><img src='images/facebook-logo.png'/></a> 
                     <a href="#"><img src='images/instagram.png'/></a>
                     <a href="#"><img src='images/twitter.png'/></a>
                </div>
                <div class="renseignements"> 
                    <img src='images/question.png' alt='img-question' />
                    <h3>AIDE & CONTACT</h3>
                    <p>Une question? Un renseignement? <br> <p>Contacter-nous</p>
                </div>
                <div class="catalogues">  
                    <h3 class="gc"> <a href="#"> Les catalogues & Guides </a></h3>
                    <p>Retrouver tous les catalogues et <br> guides pour réaliser tous vos projets</p>
                </div>
               
            </div>
            <div class="adress">
                28, rue Notre-Dame-des-Champs<br>75006 Paris
            
            </div>
            
            
             <div class="ml">
                    Mentions légales
                </div>
           
           
        </footer>
        
        
        
        
        
    </body>
</html>
