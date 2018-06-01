<?php

include ('./Modele/requetes.utilisateurs.php');

$h = 0;
$_SESSION['d']=0;
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
                    'email'=> $_POST['email'],
                    'password' => $_POST['password']
                ];
                
                $user=login($bdd, $user);
                /*
                 * ce test verifie que les identifiant de l'utilisateur sont correcte
                 */
                if (!empty($user))
                {
                    $vue="accueil";
                    /*
                     * change le header pour afficher le bouton d�connexion
                     */
                    
                    $_SESSION['id']=$user[0][0];
                    $_SESSION['nom']=$user[0][1];
                    $_SESSION['prenom']=$user[0][2];
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
        	$_SESSION['d'] = 1;
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
                
            	$hash_password = password_hash($_POST['passWord'], PASSWORD_DEFAULT);
            	$user =[
                        'email'=> $_POST['email'],
            			'password'=>$hash_password,
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
        				'pseudo'=> $_SESSION['prenom'],
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
    	
    
 
include ('./Vue/header.php');
if (!empty($_SESSION['id']) && $_SESSION['d'] != 1 && $vue != "catalogue")
{
	include ('./Vue/navigation.php');
}

include ('./Vue/'. $vue .'.php');
include ('./Vue/footer.php');