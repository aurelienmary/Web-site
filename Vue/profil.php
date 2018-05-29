<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Profil</title>
        <link href="./public/css/profil.css" rel="stylesheet">
         <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
    </head>
    
    
    <body>
    
    <div class="card">
  <img src="./public/images/silhouettepng.png" alt="John" style="width:100%">
  <h1><?php echo $_SESSION['prenom'] . ' ' . $_SESSION['nom']?></h1>
  <p class="title"><?php echo $_SESSION['email']?></p>
  <p>Harvard University</p>
  <a href="#"><i class="fa fa-dribbble"></i></a> 
  <a href="#"><i class="fa fa-twitter"></i></a> 
  <a href="#"><i class="fa fa-linkedin"></i></a> 
  <a href="#"><i class="fa fa-facebook"></i></a> 
  <p><button>Contact</button></p>
</div>
    
    
</body>
</html>

    
    
    