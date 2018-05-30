<?php
    require 'database.php';

    if(!empty($_GET['id'])) 
    {
        $id = checkInput($_GET['id']);
    }
     
    $db = Database::connect();
    $statement = $db->prepare("SELECT capteurs.id, capteurs.name, capteurs.description, capteurs.logement, capteurs.image, pieces.name AS piece FROM capteurs LEFT JOIN pieces ON capteurs.piece = pieces.id WHERE capteurs.id = ?");
    $statement->execute(array($id));
    $item = $statement->fetch();
    Database::disconnect();

    function checkInput($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

?>

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
        <link rel="stylesheet" href="capteur.css">
    </head>
    
    <body>
        <h1 class="text-logo"><span class=""></span> Gestion des capteurs <span class=""></span></h1>
         <div class="container admin">
            <div class="row">
               <div class="col-sm-6">
                    <h1><strong>Voir un capteur</strong></h1>
                    <br>
                    <form>
                      <div class="form-group">
                        <label>Nom:</label><?php echo '  '.$capteur['name'];?>
                      </div>
                      <div class="form-group">
                        <label>Description:</label><?php echo '  '.$capteur['description'];?>
                      </div>
                      <div class="form-group">
                        <label>Logement:</label><?php echo '  '.number_format((float)$capteur['logement'], 2, '.', ''). ' ';?>
                      </div>
                      <div class="form-group">
                        <label>Piece:</label><?php echo '  '.$capteur['piece'];?>
                      </div>
                      <div class="form-group">
                        <label>Image:</label><?php echo '  '.$capteur['image'];?>
                      </div>
                    </form>
                    <br>
                    <div class="form-actions">
                      <a class="btn btn-primary" href="index.php"><span class="glyphicon glyphicon-arrow-left"></span> Retour</a>
                    </div>
                </div> 
                <div class="col-sm-6 site">
                    <div class="thumbnail">
                        <img src="<?php echo '../images/'.$capteur['image'];?>" alt="...">
                          <div class="caption">
                            <h4><?php echo $capteur['name'];?></h4>
                            <p><?php echo $capteur['description'];?></p>
                            <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon"></span> ...</a>
                          </div>
                    </div>
                </div>
            </div>
        </div>   
    </body>
</html>

