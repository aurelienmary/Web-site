<?php

include ('./Modele/requetes.utilisateurs.php');

$h = 0;

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
		
	case "stat":
		$vue="stat";
		$title="stat";
		break;
		
            
        case "ajoutcapteur" :
        	if (!empty($_SESSION['id']))
        	{
	        	$vue="ajoutcapteur";
	        	$title="ajoutcapteur";
	        	break;
        	}
        	
        	else {
        		$vue="accueil";
        	}
        	break;
        
        case "addSensor" :
        	if (!empty($_SESSION['id']))
        	{
	        	$vue="addSensor";
	        	$title="addSensor";
	        	break;
        	}
        	
        	else {
        		$vue="accueil";
        	}
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
                
                
                $utilisateur = login($bdd, $user);
                print_r($utilisateur);
                
                /*
                 * ce test verifie que les identifiant de l'utilisateur sont correcte
                 */
                if (!empty($user))
                {
                    $vue="accueil";
                    /*
                     * change le header pour afficher le bouton d�connexion
                     */
                    $_SESSION['d']= 0;
                    $_SESSION['id']=$utilisateur[0]['id'];
                    $_SESSION['email']=$utilisateur[0]['email'];
                    $_SESSION['lastname']=$utilisateur[0]['lastname'];
                    $_SESSION['name']=$utilisateur[0]['name'];
                    $_SESSION['admin']=$utilisateur[0]['admin'];
	                $vue="ajoutcapteur";
	                $alerte="vous êtes connecté";
	                echo($alerte);
	                    
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
        	$_SESSION['d'] = 1;
        	session_destroy();
        	
        	break;
        		
	case "contact":
		$vue="contact";
		$title="contact";
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
        	if (isset($_POST['message'] ))
        	{
        		$echange =[
        				'pseudo'=> $_SESSION['name'],
        				'message'=>$_POST['message'],
        				
        				
        		];
        		chat($bdd,$echange);
        		
        	}
        	break;
        	
        case "profil":
        	$vue="profil";
        	$alerte=false;
        	$title="profil";
        	break;


}
    	
         case "apropos":
        	$vue="apropos";
        	$alerte=false;
        	$title="apropos";
        	break;


}
    	
    
 


include ('./Vue/header.php');
if (!empty($_SESSION['id']) && $_SESSION['d'] != 1 && $vue != "catalogue")
{
	include ('./Vue/navigation.php');
}
include ('./Vue/'. $vue .'.php');

include ('./Vue/footer.php');
