<?php

include ('./Modele/requetes.utilisateurs.php');

$h = 0;
$_COOKIE['d']=0;
if (!isset($_GET ['fonction']) || empty($_GET['fonction']))
    {
        $function ="accueil";
    }
else 
    {
        $function=$_GET['fonction'];
    }
    
switch ($function)
    {
        case "accueil":
            /*
             affichage de la vue de l'acceuil
             */
            $vue="accueil";
            $title="Accueil";
            break;
            
        case "ajoutcapteur":
        	$vue="ajoutcapteur";
        	$title="ajoutcapteur";
        	break;
            
        
        case "connexion":
            /*
             affichage de la vue de connexion
             */
            $vue="connexion";
            $alerte=false;
            $title="Connexion";
            /*
             * ce code est appel� sie le formulaire � �t� post�
             */
            if (isset($_POST['identifiant']) and isset($_POST['password']))
            {
                $user=[
                        'email'=> $_POST['identifiant'],
                        'password' => $_POST['password']
                        ];
                $_SESSION['id']=login($bdd, $user);
                $_SESSION['prenom'] = $_SESSION['id']['name'];
               	$_SESSION['nom'] = $_SESSION['id']['lastname'];
                /*
                 * ce test verifie que les identifiant de l'utilisateur sont correcte
                 */
                if (!empty($_SESSION['id']))
                {
                    
                    $vue="ajoutcapteur";
                    
                    /*
                     * fonction qui r�cup�re la table de l'utilisateur dans la base de donn�e
                     */
                 
                    /*
                     * fontion searchuser � r�aliser
                     * 
                     */
                    
                    $h = 1;
                }
                else
                {
                    $alerte="l'identifiant ou le mot des passe sont éronnés";
                    echo($alerte);
                }
            }
            break;
        
        case "deconnexion":
        	$vue="deconnexion";
        	$alerte=false;
        	$title="deconnexion";
        	$_COOKIE['d'] = 1;
        	session_destroy();
        	
        	break;
        		
       
        
        
        case "inscription":
            /*
             affichage de la vue inscription
             */
            $vue="inscription";
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
                adduser($bdd,$user);
                
            }
            $title="Inscription";
            break;
            
        case "catalogue":
        	/*
        	 affichage de la vue catalogue
        	 */
        	$vue="catalogue";
        	$alerte=false;
        	$title="Catalogue";
        	break;
   		
        case "chat" :
        	
        	$vue="chat";
        	$alerte=false;
        	$title="Catalogue";
        	if (isset($_POST['pseudo']) and isset($_POST['message'] ))
        	{
        		$echange =[
        				'pseudo'=> $_POST['pseudo'],
        				'message'=>$_POST['message'],
        				
        				
        		];
        		chat($bdd,$echange);
        		
        	}
        	break;


}
    	
    
 
include ('./Vue/header.php');
if (!empty($_SESSION['id']) && $_COOKIE['d'] != 1 && $vue != "catalogue")
{
	include ('./Vue/navigation.php');
}

include ('./Vue/'. $vue .'.php');
include ('./Vue/footer.php');