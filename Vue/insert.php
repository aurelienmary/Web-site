

<!DOCTYPE html>
<html>
    <head>
        <title> Code</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="../css/styles.css">
    </head>
    
    <body>
        <h1 class="text-logo"><span class=""></span> Gestion des capteurs <span class=""></span></h1>
         <div class="container admin">
            <div class="row">
                <h1><strong>Ajouter un capteur</strong></h1>
                <br>
                <form class="form" action="index.php?cible=capteurs&fonction=ajout" role="form" method="post" enctype="multipart/form-data">
                    
                    <div class="form-group">
                        <label for="name">Nom:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nom" >
                        
                    </div>
                    
                    <div class="form-group">
                        <label for="piece">Type:</label>
                        <select class="form-control" id="type" name="type">
                        
                        <?php
                           
                           foreach ($bdd->query('SELECT * FROM sensorstype ') as $row) 
                           {
                                echo '<option value="'. $row['id'] .'">'. $row['name'] . '</option>';;
                           }
                          
                        ?>
                        
                        </select>

                    </div>
                    
                    
                    
                    <div class="form-group">
                        <label for="piece">Piece:</label>
                        <select class="form-control" id="piece" name="piece">
                        
                        <?php
                           //$bdd = Database::connect();
                           foreach ($bdd->query('SELECT * FROM piece WHERE users_id = \'' . $_SESSION['id'] .'\' ') as $row) 
                           {
                                echo '<option value="'. $row['id'] .'">'. $row['name'] . '</option>';;
                           }
                          
                        ?>
                        
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