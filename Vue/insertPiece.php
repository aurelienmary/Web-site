
<!DOCTYPE html>
<html>
    <head>
        <title>Page Pièces</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="../css/styles.css">
    </head>
    
    <body>
        <h1 class="text-logo"><span class=""></span> Gestion des pièces <span class=""></span></h1>
         <div class="container admin">
            <div class="row">
                <h1><strong>Ajouter une pièce</strong></h1>
                <br>
                <form class="form" action="index.php?cible=building&fonction=ajout" role="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Description:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="pièce de ..." >
                        
                    </div>
                    
                    <div class="form-group">
                        <label for="superficie">Superficie(en m²)</label>
                        <input type="number" step="1" class="form-control" id="superficie" name="superficie" placeholder="Superficie" >
                       
                    </div>
                    <div class="form-group">
                        <label for="type">Type de Piece:</label>
                        <select class="form-control" id="type" name="type">
                        
	                        <option value="chambre">Chambre</option>
	                        <option value="salle_de_bain"> salle de bain</option>
	                        <option value="salon"> salon</option>
	                        <option value="garage"> garage</option>
	                        <option value="cuisine"> Cuisine</option>
	                        <option value="sellier"> sellier</option>
	                        <option value="couloir"> Couloir/option>
	                        <option value="salle_a_manger"> salle à manger</option>
	                        
                        </select>
                        
                       
                    </div>
                    
                    <br>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> Ajouter</button>
                        <a class="btn btn-primary" href="index.php"><span class="glyphicon glyphicon-arrow-left"></span> Retour</a>
                   </div>
                </form>
            </div>
        </div>   
    </body>
</html>