<?php


include ("./Modele/requetes.capteurs.php");



if (!isset($_GET['fonction']) || empty([$_GET['fonction']]))
{
    $function = "capteurs";
}
else
{
    $function= $_GET['fonction'];
}

switch ($function)
{
    case 'capteurs':
        $vue="addSensor";
        $title= "Les capteurs";
        
        $liste = getusersensor($bdd, $_SESSION['id']);
        print_r($liste);
        if (empty($liste))
        {
            $alerte="Aucun capteur n'est enregistré pour le moment";
        }
        break;
        
        
    case 'ajout':
        $vue="insert";
        $title="Ajouter un capteur";
        $alerte=false;
                    if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['email']) and isset($_POST['passWord']) and isset($_POST['birthdate']) and isset($_POST['numTel']) and isset($_POST['adresse']) and isset($_POST['codepostal']))
            {
                
            	$user =[
                        'email'=> $_POST['email'],
            	        'password'=>$_POST['passWord'],
                        'lastname' => $_POST['nom'],
                        'name'=> $_POST['prenom'],
                        'birthdate'=> $_POST['birthdate'],
                        'phonenumber'=>$_POST['numTel'],
                        'adress'=>$_POST['adresse'],
                        'postalcode'=>$_POST['codepostal'],
                    
                        ];
                
                addsensor($bdd,$sensor);
                
            }
            $title="Inscription";
        
        break;
        
        
        
    
}


include ('./Vue/header.php');
include ('./Vue/' . $vue . '.php');
include ('./Vue/footer.php');
