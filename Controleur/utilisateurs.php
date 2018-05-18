<?php

include ('./Modele/requetes.utilisateurs.php');


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
                     */
                }
                else
                {
                    $alerte="l'identifiant ou le mot des passe sont éronnés";
                    echo($alerte);
                }
            }
            break;
            
        case "inscription":
            /*
             affichage de la vue inscription
             */
            $vue="inscription";
            $alerte=false;
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
    }
 
include ('./Vue/header.php');
include ('./Vue/'. $vue .'.php');
include ('./Vue/footer.php');