<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Page d'inscription</title>
        <link href="public/css/inscription.css" rel="stylesheet">
        <script type="text/javascript" language="javascript" src="script2.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 
          
        <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet"> 
        
        
    </head>
    
    
    <body>
    <div class="inscription">
             		<h1>Inscription</h1>
             		
     	</div>
 		
     <section>   
     
     
     
     
     <div class="login-box">
         
       <div class="box">
           
           
           
            
 <form id="contact-form" action="index.php?cible=utilisateurs&fonction=inscription" method="POST" role="form">
               
               
        <div class="messages"></div>

        <div class="controls">
               
               
            <div class="mat-div">
                <label for="fullname" class="mat-label">Nom</label>
                <input type="text" name="nom" class="mat-input" ="" data-error="Firstname is .">
           
           </div>
            
            
            
               
     
     
     <div class="mat-div">
                <label for="fullname" class="mat-label">Prénom</label>
                <input type="text" name="prenom" class="mat-input" ="" data-error="Firstname is ." >
           
           </div>
           
           <div class="mat-div">
                <label for="email" class="mat-label">E-mail</label>
                <input required type="text" name="email" class="mat-input" ="" data-error="Valid email is .">
           
           </div>
           
           <div class="mat-div">
                <label for="fullname" class="mat-label">Mot de passe</label>
                <input type="text" name="passWord" class="mat-input" ="" data-error="password is " >
           
           </div>
               
               <div class="mat-div">
                <label for="fullname" class="mat-label">Date de naissance</label>
                <input type="text" name="birthdate" class="mat-input" >
           
           </div>
               
               <div class="mat-div">
                <label for="fullname" class="mat-label">Numéro de téléphone</label>
                <input type="text" name="numTel" class="mat-input" ="" data-error="Valid tel is ">
           
           </div>
        
           
           <div class="mat-div">
                <label for="fullname" class="mat-label">Adresse</label>
                <input type="text" name="adresse" class="mat-input">
           
           </div>
           
           <div class="mat-div">
                <label for="fullname" class="mat-label">Code postal</label>
                <input type="text" name="codepostal" class="mat-input">
           
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

      
</section>

       
        
        
        
        
        
    </body>
</html>
