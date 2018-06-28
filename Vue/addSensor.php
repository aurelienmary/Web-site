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
                <h1><strong>Liste des capteurs   </strong><a href="index.php?cible=capteurs&fonction=ajout" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-plus"></span> Ajouter</a></h1>
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Nom du capteur</th>
                      <th>Valeur</th>
                      
                      <th>Piece</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                     <?php
                        
                        
                        $statement = $bdd->query('SELECT id, name, valeur, piece_id FROM sensors WHERE users_id= \'' . $_SESSION['id'] .'\'');
                        while($item = $statement->fetch()) 
                        {
                            echo '<tr>';
                            echo '<td>'. $item['name'] . '</td>';
                            
                           
                            echo '<td>'. $item['valeur'] . '</td>';
                            echo '<td>'. $item['piece_id'] . '</td>';
                            
                            echo '<td width=300>';
                            
                            echo ' ';
                            echo '<a class="btn btn-primary" href="update.php?id='.$item['id'].'"><span class="glyphicon glyphicon-pencil"></span> Modifier</a>';
                            echo ' ';
                            echo '<form method="POST" id="suprimmer" action="index.php?cible=capteurs&fonction=supprimer"<button value="'.$item['id'].'" class="btn btn-danger" name="supr" id="supr"><span class="glyphicon glyphicon-remove"></span> Supprimer /></form>';
                            echo '</td>';

                            echo '</tr>';
                        }
                        
                      ?>  
                      
                  </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
